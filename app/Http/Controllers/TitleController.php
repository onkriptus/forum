<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoretitleRequest;
use App\Http\Requests\UpdatetitleRequest;
use App\Models\title;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoretitleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretitleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(title $title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(title $title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetitleRequest  $request
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetitleRequest $request, title $title)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(title $title)
    {
        //
    }
}
