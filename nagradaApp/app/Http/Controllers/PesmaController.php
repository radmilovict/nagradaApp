<?php

namespace App\Http\Controllers;

use App\Http\Resources\PesmaResource;
use App\Models\Pesma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PesmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PesmaResource::collection(Pesma::all());
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
            'nazivPesme' => 'required|string',
            'nazivAlbuma' => 'required|string',
            'zanrPesme' => 'required'
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $pes = Pesma::create([
            'nazivPesme' => $request->nazivPesme, 
            'nazivAlbuma' => $request->nazivAlbuma, 
            'zanrPesme' => $request->zanrPesme

        ]);
        $pes->save();
        return response()->json(['Pesma kreirana!', new PesmaResource($pes)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function show(Pesma $pesma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesma $pesma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nazivPesme' => 'string|min:3',
            'nazivAlbuma' => '',
            'zanrPesme' => ''
             
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());

        $p=Pesma::find($id);
        if($p){
            $p->nazivPesme = $request->nazivPesme;
            $p->nazivAlbuma = $request->nazivAlbuma;
            $p->zanrPesme = $request->zanrPesme;

            $p->save();
            return response()->json(['Pesma uspesno izmenjena!', new PesmaResource($p)]);
        }else{
            return response()->json('Trazeni objekat ne postoji u bazi');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesma  $pesma
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pesma = Pesma::find($id);
        if($pesma){ 
            $pesma->delete();
            return response()->json("Uspesno obrisana pesma!" );
        } else {

            return response()->json([
                'message' => 'Nije moguce obrisati pesmu jer ona ne postoji u bazi.',
            ], 400);
        }
    }
}
