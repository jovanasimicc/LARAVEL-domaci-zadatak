<?php

namespace App\Http\Controllers\APICont;

use App\Http\Controllers\Controller;
use App\Http\Resources\MusterijaResource;
use App\Models\Musterija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class MusterijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sve_musterije_db = DB::table('musterijas')->get();

        return MusterijaResource::collection($sve_musterije_db);
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
        $validator = Validator::make($request->all(), [
            'ime' => 'required',
            'prezime' => 'required',
            'broj_telefona' => 'required',
            'frizer_id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        DB::table('musterijas')->insert([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'broj_telefona' => $request->broj_telefona,
            'frizer_id' => $request->frizer_id
        ]);

        return response()->json('Musterija sacuvana');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Musterija  $musterija
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $musterija = DB::table('musterijas')->where('id', $id)->first();

        return new MusterijaResource($musterija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Musterija  $musterija
     * @return \Illuminate\Http\Response
     */
    public function edit(Musterija $musterija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Musterija  $musterija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Musterija $musterija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Musterija  $musterija
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('musterijas')->where('id', $id)->delete();

        return response()->json('Musterija obrisana');
    }
}
