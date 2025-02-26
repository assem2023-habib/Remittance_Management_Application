<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use App\Http\Requests\StoreParcelRequest;
use App\Http\Requests\UpdateParcelRequest;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            Parcel::all()
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParcelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Parcel $Parcel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Parcel $Parcel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateParcelRequest $request, Parcel $Parcel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parcel $Parcel)
    {
        //
    }
}
