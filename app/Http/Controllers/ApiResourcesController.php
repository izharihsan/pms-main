<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ApiResourcesController extends Controller
{
    public $ssoUrl;

    public function __construct()
    {
        $this->ssoUrl = env('APP_SSO_URL');
    }

    public function healthCheck()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->post($this->ssoUrl . '/auth/logout', [
                'email' => Auth::user()->email
            ]);

        return $response->json();
    }

    public function categoryFacilities()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/master/category-facilities');

        return $response->json();
    }

    public function bedType()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/master/bedType');

        return $response->json();
    }

    public function facilities()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/master/facilities');

        return $response->json();
    }

    public function roomType()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/master/roomType');

        return $response->json();
    }

    public function product($product_code)
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/product/'.$product_code);

        return $response->json();
    }
}
