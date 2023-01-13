<?php

namespace App\Http\Controllers\APICont;

use App\Http\Controllers\Controller;
use App\Http\Resources\FrizerResource;
use App\Models\Frizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrizerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $svi_frizeri_db = DB::table('frizers')->get();

        return FrizerResource::collection($svi_frizeri_db);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $frizer = DB::table('frizers')->where('id', $id)->first();

        return new FrizerResource($frizer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function edit(Frizer $frizer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frizer $frizer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frizer  $frizer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frizer $frizer)
    {
        //
    }
}
