<?php

namespace App\Http\Controllers;

use App\Models\pengasuh;
use Illuminate\Http\Request;

class PengasuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AnakAsuh.index');
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
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function show(AnakAsuh $AnakAsuh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function edit(AnakAsuh $AnakAsuh)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AnakAsuh $AnakAsuh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function destroy(AnakAsuh $AnakAsuh)
    {
        //
    }
}