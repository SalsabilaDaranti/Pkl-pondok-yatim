<?php

namespace App\Http\Controllers;

use App\Models\pengasuh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengasuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengasuh = DB::table('pengasuhs')->get();
       // return view('pengasuh.index');
       return view('pengasuh.index',['pengasuh' => $pengasuh]); 
       return view('pengasuh.create',['pengasuh' => $pengasuh]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengasuh.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function show(pengasuh $pengasuh)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengasuh = Pengasuh::find($id);
        return view('pengasuh.edit')->with(compact('pengasuh'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengasuh $pengasuh)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengasuh $pengasuh)
    {
        //
    }
}
