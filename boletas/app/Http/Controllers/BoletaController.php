<?php

namespace App\Http\Controllers;

use App\Models\boleta;
use Illuminate\Http\Request;

class BoletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return boleta::where('usuario', NULL)->get();
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
     * @param  \App\Models\boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return boleta::where('usuario', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function edit(boleta $boleta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $boleta = boleta::findOrFail($id);
        if ($boleta->usuario == $request['id_usuario']) {
            $boleta_1['usuario'] = NULL;
        } else {
            $boleta_1['usuario'] = $request['id_usuario'];
        }
        boleta::findOrFail($id)->update($boleta_1);
        $boleta = boleta::findOrFail($id);
        return $boleta;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\boleta  $boleta
     * @return \Illuminate\Http\Response
     */
    public function destroy(boleta $boleta)
    {
        //
    }
}
