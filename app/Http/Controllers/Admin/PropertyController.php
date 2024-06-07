<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ApiResourcesController;
use App\Http\Controllers\Controller;
use App\Models\CategoryFacility;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\PropertyAddress;
use App\Models\PropertyContact;
use App\Models\PropertyDocument;
use App\Models\PropertyFacilities;
use App\Models\PropertyNearby;
use App\Models\PropertyPhotos;
use App\Models\PropertyStyle;
use App\Models\PropertyTerms;
use App\Models\PropertyType;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Property::orderBy('id', 'desc')->paginate(10);
        
        return view('admin.property.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $apiResource = new ApiResourcesController();
        // $category_facilities = $apiResource->categoryFacilities();
        // $room_type = $apiResource->roomType();
        // $bed_type = $apiResource->bedType();
        $facilities = $apiResource->propertyFacilities()['data']['categories'] ?? [];

        $category_facilities = CategoryFacility::orderBy('name', 'asc')->get();
        $property_style = null;

        if ($request->step == 3) {
            if ($request->has('property_type') && $request->property_type != '') {
                $property_style = PropertyStyle::where('category_facility_id', $request->property_type)->orderBy('name', 'asc')->get();
            }else{
                $url = '/admin/property/create?step=2&category='.$request->category;
                return redirect($url)->with('danger', 'Please select category facility first!');
            }
        }

        if ($request->has('step')) {
            return view('admin.property.step' . $request->step, compact('category_facilities', 'facilities', 'property_style'));
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
                    'email' => $request->email,
                    'property_type' => $request->property_type,
                    'total_room' => $request->total_room,
                    'nib' => $request->nib,
                    'category' => \Str::lower($request->category),
                    'description' => $request->description,
                    'rate' => $request->rate,
                    'user_id' => Auth::user()->id,
                ]);

                $property_category = PropertyCategory::create([
                    'name' => \Str::lower($request->category),
                    'properties_id' => $property->id,
                ]);

                $property_address = PropertyAddress::create([
                    'province_id' => $request->province,
                    'city_id' => $request->city,
                    'district_id' => $request->district,
                    'village_id' => $request->village,
                    'postal_code' => $request->postal_code,
                    'address' => $request->address,
                    'long' => $request->long,
                    'lat' => $request->lat,
                    'properties_id' => $property->id,
                ]);

                if ($request->has('main_contact_name') && $request->main_contact_name[0] != null) {
                    foreach ($request->main_contact_name as $key => $value) {
                        $property_contact_main = PropertyContact::create([
                            'name' => $value,
                            'email' => $request->main_contact_email[$key],
                            'phone' => (int)$request->main_contact_phone[$key],
                            'position' => $request->main_contact_position[$key],
                            'type' => 1,
                            'properties_id' => $property->id,
                        ]);
                    }
                }

                if ($request->has('reservation_contact_name') && $request->reservation_contact_name[0] != null) {
                    foreach ($request->reservation_contact_name as $key => $value) {
                        $property_contact_res = PropertyContact::create([
                            'name' => $value,
                            'email' => $request->reservation_contact_email[$key],
                            'phone' => (int)$request->reservation_contact_phone[$key],
                            'position' => $request->reservation_contact_position[$key],
                            'type' => 2,
                            'properties_id' => $property->id,
                        ]);
                    }
                }

                if ($request->has('acounting_contact_name') && $request->acounting_contact_name[0] != null) {
                    foreach ($request->acounting_contact_name as $key => $value) {
                        $property_contact_acc = PropertyContact::create([
                            'name' => $value,
                            'email' => $request->acounting_contact_email[$key],
                            'phone' => $request->acounting_contact_phone[$key],
                            'position' => $request->acounting_contact_position[$key],
                            'type' => 3,
                            'properties_id' => $property->id,
                        ]);
                    }
                }
        
                foreach ($request->facility_id as $key => $value) {
                    $property_facility = PropertyFacilities::create([
                        'facilities_category_id' => $value['facilities_category_id'][$key] ?? null,
                        'facilities_id' => $value,
                        'properties_id' => $property->id,
                    ]);
                }
                

                $property_terms = PropertyTerms::create([
                    'reception_area' => $request->reception_area,
                    'check_in_from' => $request->check_in_from,
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

                if ($request->has('property_doc')) {
                    foreach ($request->property_doc as $key => $value) {
                        PropertyDocument::find($value)->update([
                            'properties_id' => $property->id,
                        ]);
                    }
                }

                if ($request->has('property_photo')) {
                    foreach ($request->property_photo as $key => $value) {
                        PropertyPhotos::find($value)->update([
                            'properties_id' => $property->id,
                            'section' => $request->section[$key],
                        ]);
                    }
                }
                $this->log('Create Property', 'property_id', $property->id, null);

                return redirect()->route('switch')->with('success', 'Data berhasil ditambahkan');
            });
        } catch (\Throwable $th) {
            dd($th);
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
    public function edit(string $id, Request $request)
    {
        $data = Property::findOrFail($id);
        // dd($data);
        $apiResource = new ApiResourcesController();

        $facilities = $apiResource->propertyFacilities()['data']['categories'] ?? [];

        $category_facilities = CategoryFacility::orderBy('name', 'asc')->get();
        $property_style = null;

        if ($request->step == 3) {
            if ($request->has('property_type') && $request->property_type != '') {
                $property_style = PropertyStyle::where('category_facility_id', $request->property_type)->orderBy('name', 'asc')->get();
            }else{
                $url = "/admin/property/$id/edit?step=2&category=".$request->category;
                return redirect($url)->with('danger', 'Please select category facility first!');
            }
        }

        if ($request->has('step')) {
            return view('admin.property.edit.step' . $request->step, compact('data', 'category_facilities', 'facilities', 'property_style'));
        }else{
            return view('admin.property.edit.step1', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $tab = $request->tab;
            $property=Property::find($id);

            // GENERAL
            if ($tab == 'general') {
                $property->update([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'description' => $request->description,
                    'rate' => $request->rate,
                ]);

                $property_address = PropertyAddress::findOrFail($property->address->id)->update([
                    'province_id' => $request->province,
                    'city_id' => $request->city,
                    'district_id' => $request->district,
                    'village_id' => $request->village,
                    'postal_code' => $request->postal_code,
                    'address' => $request->address,
                    'long' => $request->long,
                    'lat' => $request->lat,
                    'properties_id' => $id,
                ]);

                $property_type_delete = PropertyType::where('properties_id', $id)->delete();

                foreach ($request->style_id as $key => $value) {
                    PropertyType::create([
                        'properties_id' => $id,
                        'type_id' => $request->type_id,
                        'style_id' => $value,
                    ]);
                }

                return redirect()->back()->with('success', 'Data berhasil diupdate');
            }

            // FACILITIES
            if ($tab == 'facilities') {
                $delete_facilities = PropertyFacilities::where('properties_id', $id)->delete();

                foreach ($request->facility_id as $key => $value) {
                    $property_facility = PropertyFacilities::create([
                        // 'facilities_category_id' => $value['facilities_category_id'][$key] ?? null,
                        // 'facilities_category_name' => $request['facilities_category_name'][$key],
                        // 'facilities_name' => $request['facilities_name'][$key],
                        'facilities_id' => $value,
                        'properties_id' => $id,
                    ]);
                }

                return redirect()->back()->with('success', 'Data berhasil diupdate');
            }

            // CONTACT
            if ($tab == 'contact') {
                foreach ($request->main_contact_name as $key => $value) {
                    $delete_property_contact = PropertyContact::where('properties_id', $id)->delete();

                    $property_contact_main = PropertyContact::create([
                        'name' => $value,
                        'email' => $request->main_contact_email[$key],
                        'phone' => (int)$request->main_contact_phone[$key],
                        'position' => $request->main_contact_position[$key],
                        'type' => 1,
                        'properties_id' => $id,
                    ]);
                }

                foreach ($request->reservation_contact_name as $key => $value) {
                    $property_contact_res = PropertyContact::create([
                        'name' => $value,
                        'email' => $request->reservation_contact_email[$key],
                        'phone' => (int)$request->reservation_contact_phone[$key],
                        'position' => $request->reservation_contact_position[$key],
                        'type' => 2,
                        'properties_id' => $id,
                    ]);
                }

                foreach ($request->acounting_contact_name as $key => $value) {
                    $property_contact_acc = PropertyContact::create([
                        'name' => $value,
                        'email' => $request->acounting_contact_email[$key],
                        'phone' => $request->acounting_contact_phone[$key],
                        'position' => $request->acounting_contact_position[$key],
                        'type' => 3,
                        'properties_id' => $id,
                    ]);
                }

                return redirect()->back()->with('success', 'Data berhasil diupdate');
            }

            if ($tab == 'terms') {
                $property_terms = PropertyTerms::find($property->terms->id)->update([
                    'reception_area' => $request->reception_area,
                    'check_in_from' => $request->check_in_from,
                    'check_in_until' => $request->check_in_until,
                    'check_out_from' => $request->check_out_from,
                    'check_out_until' => $request->check_out_until,
                    'range' => $request->range,
                    'floors' => $request->floors,
                    'cancelation_policy' => $request->cancelation_policy,
                    'release_time_type' => $request->release_time_type,
                    'release_after_booking' => $request->release_after_booking,
                    'properties_id' => $id,
                ]);

                return redirect()->back()->with('success', 'Data berhasil diupdate');
            }

            if ($tab == 'documents') {
                // dd($request->all());
                // PropertyDocument::where('properties_id', $id)->delete();

                foreach ($request->property_doc as $key => $value) {
                    PropertyDocument::find($value)->update([
                        'properties_id' => $id,
                    ]);
                }

                return redirect()->back()->with('success', 'Data berhasil diupdate');
            }

            if ($tab == 'photos') {
                foreach ($request->property_photo as $key => $value) {
                    PropertyPhotos::find($value)->update([
                        'properties_id' => $id,
                        'section' => $request->section[$key],
                    ]);
                }

                return redirect()->back()->with('success', 'Data berhasil diupdate');
            }

            if ($tab == 'nearby') {
                foreach ($request->place_name as $key => $value) {
                    if ($value != null) {
                        PropertyNearby::create([
                            'category_nearby_id' => $request->category_nearby_id[$key],
                            'place_name' => $value,
                            'distance' => $request->distance[$key],
                            'property_id' => $id,
                        ]);
                    }
                }

                return redirect()->back()->with('success', 'Data berhasil diupdate');
            }

            // return $this->atomic(function () use ($request, $id) {
            //     $this->log('Update Property', 'property_id', $id, null);

            //     return back()->with('success', 'Data berhasil diupdate');
            // });
        } catch (\Throwable $th) {
            dd($th);
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            return $this->atomic(function () use ($id) {
                $property = Property::find($id)->delete();
                $property_terms = PropertyTerms::where('properties_id', $id)->delete();
                $property_facility = PropertyFacilities::where('properties_id', $id)->delete();
                $property_type = PropertyType::where('properties_id', $id)->delete();
                $property_contact = PropertyContact::where('properties_id', $id)->delete();
                $property_document = PropertyDocument::where('properties_id', $id)->delete();
                $property_photo = PropertyPhotos::where('properties_id', $id)->delete();

                
                return response()->json([
                    'message' => 'Data berhasil di hapus',
                    'status' => true
                ]);
            });
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage(),
                'status' => false
            ]);
        }
    }

    public function uploadPropertyDocument(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('property/document', 'public');

            $create = PropertyDocument::create([
                'file' => $path,
                'file_name' => $request->name,
                'properties_id' => null,
            ]);

            return $create;
        }
    }

    public function uploadPropertyPhoto(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('property/photo', 'public');

            $create = PropertyPhotos::create([
                'image' => $path,
                'image_name' => $request->name,
                'properties_id' => null,
            ]);

            return $create;
        }
    }

    public function manageProperty($id)
    {
        $property = Property::find($id);

        $apiResource = new ApiResourcesController();
        $room_type = $apiResource->roomType()['data'];
        $bed_type = $apiResource->bedType()['data'];
        $room_facilities = $apiResource->roomFacilities()['data']['categories'];

        return view('admin.roomManagement.create', compact('property', 'room_type', 'bed_type', 'room_facilities'));
    }

    public function deleteDoc($id)
    {
        $delete = PropertyDocument::find($id)->delete();

        return redirect()->back()->with('success', 'Data berhasil di hapus');
    }
}
