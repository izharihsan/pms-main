<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ApiResourcesController;
use App\Http\Controllers\Controller;
use App\Models\CancelationPolicy;
use App\Models\CategoryNearby;
use App\Models\Log;
use App\Models\Property;
use App\Models\PropertyStyle;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Property::find(Auth()->user()->property_id);
        $property_style = PropertyStyle::where('category_facility_id', $data->property_type)->orderBy('name', 'asc')->get();
        $cancelation_policies = CancelationPolicy::orderBy('name', 'asc')->get();
        
        $apiResource = new ApiResourcesController();
        $facilities = $apiResource->propertyFacilities()['data']['categories'] ?? [];
        $main_contact = $data->contact()->where('type', 1)->get();
        $reservation_contact = $data->contact()->where('type', 2)->get();
        $accounting_contact = $data->contact()->where('type', 3)->get();
        $category_nearby = CategoryNearby::orderBy('name', 'asc')->get();
        $terms = $data->terms;
        $document = $data->document;
        $photos = $data->photos;

        return view('admin.dashboard', compact('data', 'property_style', 'facilities', 'main_contact', 'reservation_contact', 'accounting_contact', 'terms', 'document', 'photos', 'category_nearby', 'cancelation_policies'));
    }
}
