<?php

namespace App\Http\Controllers;

use App\Models\ForumAgama;
use Illuminate\Http\Request;
use DB;


class ForumAgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_forumagama=DB::table('forum_agamas')->get();
        return view('page.PnFA',compact('data_forumagama'));
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
     * @param  \App\Models\ForumAgama  $forumAgama
     * @return \Illuminate\Http\Response
     */
    public function show(ForumAgama $forumAgama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumAgama  $forumAgama
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumAgama $forumAgama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForumAgama  $forumAgama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumAgama $forumAgama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumAgama  $forumAgama
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumAgama $forumAgama)
    {
        //
    }
}
