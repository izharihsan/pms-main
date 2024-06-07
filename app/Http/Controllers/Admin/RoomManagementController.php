<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\ApiResourcesController;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Room;
use App\Models\RoomBedroom;
use App\Models\RoomFacility;
use App\Models\RoomPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomManagementController extends Controller
{
    public function index(Request $request)
    {
        $data = Room::orderBy('id', 'desc')->paginate(10);

        $property_select = Auth::user()->property_id ?? null;
        if (Auth::user()->property_id) {
            $property_id = Auth::user()->property_id;
            $data = Room::where('property_id', $property_id)->orderBy('id', 'desc')->paginate(10);
            $property_select = Property::find($property_id);
        }

        $property = Property::orderBy('id', 'desc')->get();

        $this->log('View Room Management', null);

        return view('admin.roomManagement.index', compact('data', 'property', 'property_select'));
    }

    public function create(Request $request, $id)
    {
        $property = Property::find($id);
        if ($property->total_room > $property->rooms()->count()) {
            return redirect('/admin/room-management/' . $request->property_id)->with('danger', 'Room is full');
        }

        $this->log('View Create Room Management', null);

        return view('admin.roomManagement.create', compact('property'));
    }

    public function store(Request $request)
    {
        $property = Property::find(Auth::user()->property_id);
        if ($property->total_room > $property->rooms()->count()) {
            return redirect('/admin/room-management/create/' . $request->property_id)->with('danger', 'Room is full');
        }

        try {
            return $this->atomic(function () use ($request) {
                $room = Room::create([
                    'room_name' => $request->room_name,
                    'room_type_id' => $request->room_type_id,
                    'number_of_room' => $request->number_of_room,
                    'max_occupancy' => $request->max_occupancy,
                    'room_width' => $request->room_width,
                    'room_length' => $request->room_length,
                    'min_rate' => $request->min_rate,
                    'extra_guest_fee' => $request->extra_guest_fee,
                    'max_extra_bed' => $request->max_extra_bed,
                    'price_of_extra_bed' => $request->price_of_extra_bed,
                    'property_id' => $request->property_id,
                ]);

                if ($request->has('bedroom_name')) {
                    foreach ($request->bedroom_name as $key => $value) {
                        $bedroom = RoomBedroom::create([
                            'name' => $value,
                            'qty' => $request->qty[$key],
                            'bedroom_type_id' => $request->bedroom_type_id[$key] ?? 1,
                            'room_id' => $room->id,
                            'property_id' => $request->property_id,
                        ]);
                    }
                }

                foreach ($request->facility_id as $key => $value) {
                    $room_facilities = RoomFacility::create([
                        'category_id' => $request->category_id[$key] ?? null,
                        'category_name' => $request->category_name[$key] ?? null,
                        'facility_id' => $value,
                        'facility_name' => $request->facility_name[$key] ?? null,
                        'property_id' => $request->property_id,
                        'room_id' => $room->id,
                    ]);
                }

                if ($request->has('room_section')) {
                    foreach ($request->room_section as $key => $value) {
                        $path = null;
                        $fileName = null;

                        if ($request->room_photo[$key]) {
                            $file = $request->room_photo[$key];
                            $path = $file->store('room/room_photo', 'public');
                            $fileName = $request->room_photo[$key]->getClientOriginalName();
                        }

                        $room_photo = RoomPhoto::create([
                            'section' => $value,
                            'photo_name' => $fileName,
                            'photo' => $path,
                            'property_id' => $request->property_id,
                        ]);
                    }
                }

                $this->log('Create Room', 'room_id', $room->id);
                return back()->with('success', 'Data berhasil ditambahkan');
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
    public function edit(string $id)    
    {
        $data = Room::find($id);
        $property = $data->property;

        $apiResource = new ApiResourcesController();
        $room_type = $apiResource->roomType()['data'];
        $bed_type = $apiResource->bedType()['data'];
        $room_facilities = $apiResource->roomFacilities()['data']['categories'];
        $this->log('View Edit Room Management', null);

        return view('admin.roomManagement.edit', compact('data', 'property', 'room_type', 'bed_type', 'room_facilities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        try {
            return $this->atomic(function () use ($request, $id) {
                $room = Room::find($id);
                $original_room = $room->getOriginal();
                
                $room->fill([
                    'room_name' => $request->room_name,
                    'room_type_id' => $request->room_type_id,
                    'number_of_room' => $request->number_of_room,
                    'max_occupancy' => $request->max_occupancy,
                    'room_width' => $request->room_width,
                    'room_length' => $request->room_length,
                    'min_rate' => $request->min_rate,
                    'extra_guest_fee' => $request->extra_guest_fee,
                    'max_extra_bed' => $request->max_extra_bed,
                    'price_of_extra_bed' => $request->price_of_extra_bed,
                    'property_id' => $request->property_id,
                ]);

                $dirty_room = $room->getDirty();
                $room->save();

                $action = 'Update Room ';
                $room_index_dirty = 1;
                foreach ($dirty_room as $attribute => $newValue) {
                    $oldValue = $original_room[$attribute];
                    $action .= $room_index_dirty . '. ' . $attribute . ' from ' . $oldValue . ' to ' . $newValue . ', ';
                    $room_index_dirty += 1;
                }
                
                $delete_room_bedroom = RoomBedroom::where('room_id', $id)->delete();

                if ($request->has('bedroom_name') && $request->bedroom_name[0] != null) {
                    foreach ($request->bedroom_name as $key => $value) {
                        $bedroom = RoomBedroom::create([
                            'name' => $value,
                            'qty' => $request->qty[$key],
                            'bedroom_type_id' => $request->bedroom_type_id[$key] ?? 1,
                            'room_id' => $id,
                            'property_id' => $request->property_id,
                        ]);
                    }
                }

                $delete_room_facility = RoomFacility::where('room_id', $id)->delete();

                foreach ($request->facility_id as $key => $value) {
                    $room_facilities = RoomFacility::create([
                        'category_id' => $request->category_id[$key] ?? null,
                        'category_name' => $request->category_name[$key] ?? null,
                        'facility_id' => $value,
                        'facility_name' => $request->facility_name[$key] ?? null,
                        'property_id' => $request->property_id,
                        'room_id' => $id,
                    ]);
                }

                
                if ($request->has('room_section') && $request->room_section[0] != null) {
                    $delete_room_photo = RoomPhoto::where('property_id', $request->property_id)->delete();
                    foreach ($request->room_section as $key => $value) {
                        $path = null;
                        $fileName = null;

                        if ($request->room_photo[$key]) {
                            $file = $request->room_photo[$key];
                            $path = $file->store('room/room_photo', 'public');
                            $fileName = $request->room_photo[$key]->getClientOriginalName();
                        }

                        $room_photo = RoomPhoto::create([
                            'section' => $value,
                            'photo_name' => $fileName,
                            'photo' => $path,
                            'property_id' => $request->property_id,
                        ]);
                    }
                }

                $this->log($action, 'room_id', $id);
                return back()->with('success', 'Data berhasil diupdate');
            });
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
                $room = Room::find($id);
                $room_facility = RoomFacility::where('room_id', $id)->delete();
                $room_photo = RoomPhoto::where('room_id', $id)->delete();
                $room_bedroom = RoomBedroom::where('room_id', $id)->delete();
                $room->delete();

                $this->log('Delete Room Management', null);

                return back()->with('success', 'Data berhasil dihapus');
            });
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
