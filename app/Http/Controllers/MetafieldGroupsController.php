<?php

namespace App\Http\Controllers;

use App\MetafieldGroups;
use App\Resources;
use Illuminate\Http\Request;
use App\Metafields;
use Auth;

class MetafieldGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($resource_id)
    {
        //
        $user_id = Auth::id();

        $metafield_groups = MetafieldGroups::where('user_id', $user_id)
                                           ->where('resource_id', $resource_id)
                                           ->get();
        $resource = Resources::where('id', $resource_id)->first();

        $data['resource'] = $resource;
        $data['metafield_groups'] = $metafield_groups;
        $data['user_id']= $user_id;
        return view('metafield_groups', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($resource_id)
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
     * @param  \App\metafield_groups  $metafield_groups
     * @return \Illuminate\Http\Response
     */
    public function show(metafield_groups $metafield_groups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\metafield_groups  $metafield_groups
     * @return \Illuminate\Http\Response
     */
    public function edit(metafield_groups $metafield_groups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\metafield_groups  $metafield_groups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, metafield_groups $metafield_groups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\metafield_groups  $metafield_groups
     * @return \Illuminate\Http\Response
     */
    public function destroy(metafield_groups $metafield_groups)
    {
        //
    }
}
