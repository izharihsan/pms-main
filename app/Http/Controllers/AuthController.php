<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public $ssoUrl;

    public function __construct()
    {
        $this->ssoUrl = env('APP_SSO_URL');
    }

    public function getToken($email, $password)
    {
        $response = Http::post($this->ssoUrl . '/auth/login', [
            'email' => $email,
            'password' => $password,
        ]);

        Log::info($response->json()['data']);
        if ($response->successful()) {
            return [
                'message' => 'Authentication successful',
                'token' => $response->json()['data']['access_token'],
                'status' => true
            ];
        } else {
            return [
                'message' => $response->json()['message'],
                'status' => false,
                'token' => null
            ];
        }
    }

    public function loginSSo(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $response = $this->getToken($request->email, $request->password);
        $user = User::where('email', $request->email)->first();

        if ($user) {
            $user->token = $response['token'];
            $user->save();
        } else {
            $create = User::create([
                'name' => $request->email,
                'email' => $request->email,
                'token' => $response['token'],
                'password' => Hash::make($request->password)
            ]);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $this->log('Login', null);

            return redirect()->route('admin.dashboard.index');
        } else {
            return response()->json(['message' => $response['message']], 401);
        }
    }

    public function logout()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->post($this->ssoUrl . '/auth/logout', [
                'email' => Auth::user()->email
            ]);

        $this->log('Logout', null);
        
        Auth::logout();
        return redirect('/login');
    }
}
