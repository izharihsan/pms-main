<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = [
            'id',
            'name',
            'email',
            'company_name',
            'status',
            'avatar',
        ];

        $keyword = request('keyword');
        
        $data = User::orderBy('id', 'desc')
                ->where(function($result) use ($keyword,$columns){
                    foreach($columns as $column)
                    {
                        if($keyword != ''){
                            $result->orWhere($column,'LIKE','%'.$keyword.'%');
                        }
                    }
                })->paginate(10);

        return view('admin.manageUser.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = null;

        return view('admin.manageUser.form', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
