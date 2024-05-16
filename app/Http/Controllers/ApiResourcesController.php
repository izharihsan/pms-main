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

        $this->log('View Api Health Check', null);

        return $response->json();
    }

    public function categoryFacilities()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/master/category-facilities');

        $this->log('View Api Category Facilities', null);

        return $response->json();
    }

    public function bedType()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/master/bedType');

        $this->log('View Api Bed Type', null);

        return $response->json();
    }

    public function propertyFacilities()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/master/property/facilities');

        $this->log('View Api Property Facilities', null);

        return $response->json();
    }

    public function roomFacilities()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/master/room/facilities');

        $this->log('View Api Room Facilities', null);

        return $response->json();
    }

    public function roomType()
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/master/roomType');

        $this->log('View Api Room Type', null);

        return $response->json();
    }

    public function product($product_code)
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . Auth::user()->token])
            ->get($this->ssoUrl . '/product/'.$product_code);

        $this->log('View Api Product', null);

        return $response->json();
    }
}
