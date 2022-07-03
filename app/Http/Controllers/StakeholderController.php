<?php

namespace App\Http\Controllers;

use App\Models\StakeholderModel;
use Illuminate\Http\Request;

class StakeholderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aboutUs', [
            'title' => 'About Us',
            'contents' => StakeholderModel::information()
        ]);
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
     * @param  \App\Models\StakeholderModel  $stakeholderModel
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('detailInformation', [
            'title' => StakeholderModel::detailInformation($slug)['title'],
            'content' => StakeholderModel::detailInformation($slug)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StakeholderModel  $stakeholderModel
     * @return \Illuminate\Http\Response
     */
    public function edit(StakeholderModel $stakeholderModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StakeholderModel  $stakeholderModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StakeholderModel $stakeholderModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StakeholderModel  $stakeholderModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(StakeholderModel $stakeholderModel)
    {
        //
    }
}
