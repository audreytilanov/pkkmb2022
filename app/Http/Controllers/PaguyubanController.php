<?php

namespace App\Http\Controllers;

use App\Models\Paguyuban;
use Illuminate\Http\Request;
use DB;

class PaguyubanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_paguyuban=DB::table('paguyubans')->get();
        return view('page.PnFA',compact('data_paguyuban'));
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
     * @param  \App\Models\Paguyuban  $paguyuban
     * @return \Illuminate\Http\Response
     */
    public function show(Paguyuban $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paguyuban  $paguyuban
     * @return \Illuminate\Http\Response
     */
    public function edit(Paguyuban $paguyuban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paguyuban  $paguyuban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paguyuban $paguyuban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paguyuban  $paguyuban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paguyuban $paguyuban)
    {
        //
    }
}
