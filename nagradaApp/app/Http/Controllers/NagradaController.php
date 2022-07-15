<?php

namespace App\Http\Controllers;

use App\Http\Resources\NagradaResource;
use App\Models\Nagrada;
use Illuminate\Http\Request;

class NagradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NagradaResource::collection(Nagrada::all());
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
     * @param  \App\Models\Nagrada  $nagrada
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new NagradaResource(Nagrada::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nagrada  $nagrada
     * @return \Illuminate\Http\Response
     */
    public function edit(Nagrada $nagrada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nagrada  $nagrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nagrada $nagrada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nagrada  $nagrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nagrada $nagrada)
    {
        //
    }
}
