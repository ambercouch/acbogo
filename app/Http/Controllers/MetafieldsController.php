<?php

namespace App\Http\Controllers;

use App\Metafields;
use Illuminate\Http\Request;

class MetafieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('metafields');
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
     * @param  \App\metafields  $metafields
     * @return \Illuminate\Http\Response
     */
    public function show(metafields $metafields)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\metafields  $metafields
     * @return \Illuminate\Http\Response
     */
    public function edit(metafields $metafields)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\metafields  $metafields
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, metafields $metafields)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\metafields  $metafields
     * @return \Illuminate\Http\Response
     */
    public function destroy(metafields $metafields)
    {
        //
    }
}
