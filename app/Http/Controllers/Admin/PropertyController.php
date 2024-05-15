<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ApiResourcesController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\PropertyAddress;
use App\Models\PropertyContact;
use App\Models\PropertyDocument;
use App\Models\PropertyFacilities;
use App\Models\PropertyPhotos;
use App\Models\PropertyTerms;
use App\Models\PropertyType;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $apiResource = new ApiResourcesController();
        // $category_facilities = $apiResource->categoryFacilities();
        // $facilities = $apiResource->facilities();
        // $room_type = $apiResource->roomType();
        // $bed_type = $apiResource->bedType();

        // dd($category_facilities, $facilities);

        
        $category_facilities['data'] = [
            ['id' => 1, 'name' => 'Lodging', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 2, 'name' => 'Riad', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 3, 'name' => 'Single-Family Home', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 4, 'name' => 'Townhome', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 5, 'name' => 'Country House', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 6, 'name' => 'Apartment', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 7, 'name' => 'Hotel', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 8, 'name' => 'House', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 9, 'name' => 'Resort', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 10, 'name' => 'Inn', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 11, 'name' => 'Ryokan', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 12, 'name' => 'Love Hotel', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 13, 'name' => 'Villa', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 14, 'name' => 'Motel', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 15, 'name' => 'Aparthotel', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 16, 'name' => 'Homestay', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 17, 'name' => 'Farm Stay', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 18, 'name' => 'Guest House', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 19, 'name' => 'Hostel', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 20, 'name' => 'Capsule Hotel', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
            ['id' => 21, 'name' => 'Bed and Breakfast', 'desc' => 'A place where people can stay, especially when they are on a long journey'],
        ];

        $city = [
            ['id' => 1, 'name' => 'Kota Denpasar'],
            ['id' => 2, 'name' => 'Kota Mataram'],
            ['id' => 3, 'name' => 'Kota Palembang'],
        ];

        $district = [
            ['id' => 1, 'name' => 'Denpasar'],
            ['id' => 2, 'name' => 'Mataram'],
            ['id' => 3, 'name' => 'Palembang'],
        ];

        $village = [
            ['id' => 1, 'name' => 'Denpasar'],
            ['id' => 2, 'name' => 'Mataram'],
            ['id' => 3, 'name' => 'Palembang'],
        ];

        $property_style = [
            ['id' => 1, 'name' => 'Style 1'],
            ['id' => 2, 'name' => 'Style 2'],
            ['id' => 3, 'name' => 'Style 3'],
            ['id' => 4, 'name' => 'Style 4'],
            ['id' => 5, 'name' => 'Style 5'],
            ['id' => 6, 'name' => 'Style 6'],
            ['id' => 7, 'name' => 'Style 7'],
            ['id' => 8, 'name' => 'Style 8'],
            ['id' => 9, 'name' => 'Style 9'],
            ['id' => 10, 'name' => 'Style 10'],
            ['id' => 11, 'name' => 'Style 11'],
            ['id' => 12, 'name' => 'Style 12'],
            ['id' => 13, 'name' => 'Style 13'],
            ['id' => 14, 'name' => 'Style 14'],
            ['id' => 15, 'name' => 'Style 15'],
        ];

        if ($request->has('step')) {
            return view('admin.property.step' . $request->step, compact('category_facilities', 'city', 'district', 'village', 'property_style'));
        }else{
            return view('admin.property.step1');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            return $this->atomic(function () use ($request) {
                $property=Property::create([
                    'name' => $request->name,
                    'legal_name' => $request->legal_name,
                    'phone' => $request->phone,
                    'total_room' => $request->total_room,
                    'nib' => $request->nib,
                    'description' => $request->description,
                    'rate' => $request->rate,
                ]);
                PropertyCategory::create([
                    'name' => $request->category,
                    'properties_id' => $property->id,
                ]);
                PropertyAddress::create([
                    'city' => $request->city,
                    'distric' => $request->distric,
                    'vilage' => $request->vilage,
                    'postal_code' => $request->postal_code,
                    'address' => $request->address,
                    'long' => $request->long,
                    'lat' => $request->lat,
                    'properties_id' => $property->id,
                ]);
                PropertyContact::create([
                    'name' => $request->main_contact_name,
                    'email' => $request->main_contact_email,
                    'phone' => (int)$request->main_contact_phone,
                    'position' => $request->main_contact_position,
                    'type' => 1,
                    'properties_id' => $property->id,
                ]);
                PropertyContact::create([
                    'name' => $request->reservation_contact_name,
                    'email' => $request->reservation_contact_email,
                    'phone' => (int)$request->reservation_contact_phone,
                    'position' => $request->reservation_contact_position,
                    'type' => 2,
                    'properties_id' => $property->id,
                ]);
                PropertyContact::create([
                    'name' => $request->acounting_contact_name,
                    'email' => $request->acounting_contact_email,
                    'phone' => (int)$request->acounting_contact_phone,
                    'position' => $request->acounting_contact_position,
                    'type' => 3,
                    'properties_id' => $property->id,
                ]);
        
                foreach ($request->file_document as $key => $value) {
                    $file = $value->store('property/document', 'public');
                    PropertyDocument::create([
                        'file' => $file,
                        'properties_id' => $property->id,
                    ]);
                }
        
                foreach ($request->facility_id as $key => $value) {
                    PropertyFacilities::create([
                        'facilities_category_id' => $value['facilities_category_id'][$key] ?? null,
                        'facilities_id' => $value,
                        'properties_id' => $property->id,
                    ]);
                }
                foreach ($request->file_photo as $key => $value) {
                    $file = $value->store('property/photo', 'public');
                    PropertyPhotos::create([
                        'image' => $file,
                        'properties_id' => $property->id,
                    ]);
                }
                PropertyTerms::create([
                    'reception_area' => $request->reception_area,
                    'cehck_in_from' => $request->cehck_in_from,
                    'check_in_until' => $request->check_in_until,
                    'check_out_from' => $request->check_out_from,
                    'check_out_until' => $request->check_out_until,
                    'range' => $request->range,
                    'floors' => $request->floors,
                    'cancelation_policy' => $request->cancelation_policy,
                    'release_time_type' => $request->release_time_type,
                    'release_after_booking' => $request->release_after_booking,
                    'properties_id' => $property->id,
                ]);
        
                foreach ($request->style_id as $key => $value) {
                    PropertyType::create([
                        'properties_id' => $property->id,
                        'type_id' => $request->type_id,
                        'style_id' => $value,
                    ]);
                }

                return back()->with('success', 'Data berhasil ditambahkan');
            });
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)    
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->file('file')) {
            $file = $request->file('file');
            $path = $file->store('property', 'public');
            $data['file'] = $path;
        }
        if ($request->file('image')) {
            $file = $request->file('image');
            $path = $file->store('property', 'public');
            $data['image'] = $path;
        }
        $property=property::where('id', $id)
        ->update([
            'name' => $request->name,
            'legal_name' => $request->legal_name,
            'phone' => $request->phone,
            'total_room' => $request->total_room,
            'nib' => $request->nib,
            'description' => $request->description,
            'rate' => $request->rate,
        ]);
        PropertyCategory::where('properties_id', $id)
        ->update([
            'name' => $request->category,
            'properties_id' => $property->id,
        ]);
        PropertyAddress::where('properties_id', $id)
        ->update([
            'city' => $request->city,
            'distric' => $request->distric,
            'vilage' => $request->vilage,
            'postal_code' => $request->postal_code,
            'address' => $request->address,
            'long' => $request->long,
            'lat' => $request->lat,
            'properties_id' => $property->id,
        ]);
        PropertyContact::where('properties_id', $id)
        ->update([
            'name' => $request->main_contact_name,
            'email' => $request->main_contact_email,
            'phone' => (int)$request->main_contact_phone,
            'position' => $request->main_contact_position,
            'type' => 1,
            'properties_id' => $property->id,
        ]);
        PropertyContact::where('properties_id', $id)
        ->update([
            'name' => $request->reservation_contact_name,
            'email' => $request->reservation_contact_email,
            'phone' => (int)$request->reservation_contact_phone,
            'position' => $request->reservation_contact_position,
            'type' => 2,
            'properties_id' => $property->id,
        ]);
        PropertyContact::where('properties_id', $id)
        ->update([
            'name' => $request->acounting_contact_name,
            'email' => $request->acounting_contact_email,
            'phone' => (int)$request->acounting_contact_phone,
            'position' => $request->acounting_contact_position,
            'type' => 3,
            'properties_id' => $property->id,
        ]);
        PropertyDocument::where('properties_id', $id)
        ->update([
            'file' => $request->file_document,
            'properties_id' => $property->id,
        ]);
        PropertyFacilities::where('properties_id', $id)
        ->update([
            'facilities_category_id' => $request->facilities_category_id,
            'facilities_id' => $request->facilities_id,
            'properties_id' => $property->id,
        ]);
        PropertyPhotos::where('properties_id', $id)
        ->update([
            'image' => $request->image,
            'properties_id' => $property->id,
        ]);
        PropertyTerms::where('properties_id', $id)
        ->update([
            'reception_area' => $request->reception_area,
            'cehck_in_from' => $request->cehck_in_from,
            'check_in_until' => $request->check_in_until,
            'check_out_from' => $request->check_out_from,
            'check_out_until' => $request->check_out_until,
            'range' => $request->range,
            'floors' => $request->floors,
            'cancelation_policy' => $request->cancelation_policy,
            'release_time_type' => $request->release_time_type,
            'release_after_booking' => $request->release_after_booking,
            'properties_id' => $property->id,
        ]);
        PropertyType::where('properties_id', $id)
        ->update([
            'name' => $request->name_type,
            'properties_id' => $property->id,
        ]);


        return back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}