<?php

namespace App\Http\Controllers;

use App\Http\Resources\IzvodjacResource;
use App\Models\Izvodjac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IzvodjacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return IzvodjacResource::collection(Izvodjac::all());
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
            'nazivIzvodjaca' => 'required|string',
            'nominovanaPesma' => 'required',
            'brojGremija' => 'required'
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $i = Izvodjac::create([
            'nazivIzvodjaca' => $request->nazivIzvodjaca, 
            'nominovanaPesma' => $request->nominovanaPesma, 
            'brojGremija' => $request->brojGremija

        ]);
        $i->save();
        return response()->json(['Izvodjac kreiran!', new IzvodjacResource($i)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Izvodjac  $izvodjac
     * @return \Illuminate\Http\Response
     */
    public function show(Izvodjac $izvodjac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Izvodjac  $izvodjac
     * @return \Illuminate\Http\Response
     */
    public function edit(Izvodjac $izvodjac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Izvodjac  $izvodjac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Izvodjac $izvodjac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Izvodjac  $izvodjac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Izvodjac $izvodjac)
    {
        //
    }
}
