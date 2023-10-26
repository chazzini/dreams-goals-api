<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\WhyResource;
use App\Models\Why;
use Illuminate\Http\Request;

class WhyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return WhyResource::collection(Why::with('category')->get());
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
    public function show($why)
    {
        return new WhyResource($why);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Why $why)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Why $why)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Why $why)
    {
        //
    }
}