<?php

namespace App\Http\Controllers;

use App\Zapato;
use Illuminate\Http\Request;

class ZapatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('zapatos.index');
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
     * @param  \App\Zapato  $zapato
     * @return \Illuminate\Http\Response
     */
    public function show(Zapato $zapato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zapato  $zapato
     * @return \Illuminate\Http\Response
     */
    public function edit(Zapato $zapato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zapato  $zapato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zapato $zapato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zapato  $zapato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zapato $zapato)
    {
        //
    }
}
