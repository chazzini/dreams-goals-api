<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ConfessionResource;
use App\Models\Confession;
use Illuminate\Http\Request;

class ConfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ConfessionResource::collection(Confession::with('category')->get());
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
    public function show(Confession $confession)
    {
        return new ConfessionResource($confession);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Confession $confession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Confession $confession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Confession $confession)
    {
        //
    }
}