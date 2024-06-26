<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log as FacadesLog;

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

        FacadesLog::info($response->json()['data']);
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

        try {
            $response = $this->getToken($request->email, $request->password);
            
            if ($response['status'] == false) {
                return redirect()->back()->with('danger', $response['message']);
            }

            $profile = $this->profile($response['token'])['data'];
            
            $user = User::where('email', $request->email)->first();
    
            if ($user) {
                $user->token = $response['token'];
                $user->name = $profile['user_fullname'];
                $user->avatar = ($profile['avatar'] == '') ? 'https://ui-avatars.com/api/?name='.$profile['user_fullname'] : $profile['avatar'];
                $user->company_name = $profile['company_name'];
                $user->status = $profile['status'];
                $user->save();
            } else {
                $create = User::create([
                    'name' => $request->email,
                    'email' => $request->email,
                    'token' => $response['token'],
                    'name' => $profile['user_fullname'],
                    'avatar' => ($profile['avatar'] == '') ? 'https://ui-avatars.com/api/?name='.$profile['user_fullname'] : $profile['avatar'],
                    'company_name' => $profile['company_name'],
                    'status' => $profile['status'],
                    'password' => Hash::make($request->password)
                ]);
            }
    
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $this->log('Login', null);
    
                return redirect()->route('mainDashboard');
            } else {
                return response()->json(['message' => $response['message']], 401);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('danger', $th->getMessage());
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
        return redirect()->route('login')->with('success', 'You don\'t have token');
    }

    public function profile($token)
    {   
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . $token])
            ->get($this->ssoUrl . '/user/profile');

        return $response->json();
    }

    public function mainDashboard()
    {
        $properties = Property::orderBy('id', 'desc')->get();
        
        return view('auth.main_dashboard', compact('properties'));
    }

    public function switch()
    {
        $properties = Property::orderBy('id', 'desc')->get();
        $log = Log::orderBy('id', 'desc')->where('user_id', Auth()->user()->id)->paginate(5);
        
        return view('auth.switch', compact('properties', 'log'));
    }

    public function switchProperty(Request $request)
    {
        $update = User::where('id', Auth::user()->id)->update([
            'property_id' => $request->property_id,
        ]);

        if ($update) {
            $this->log('Switch Property', $request->property_id);
            return redirect()->route('admin.dashboard.index');
        }

        return redirect()->route('admin.dashboard.index')->with('danger', 'Property not selected');
    }
}
