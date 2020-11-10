<?php

namespace App\Http\Controllers\Api;

use App\Wear;
use App\Http\Controllers\Controller;
use App\Http\Resources\WearResource;
use App\Http\Resources\WearCollection;

class WearApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new WearCollection(WearResource::collection(Wear::all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wear  $wear
     * @return \Illuminate\Http\Response
     */
    public function show($wearID)
    {
        return new WearResource(Wear::findOrFail($wearID));
    }
}
