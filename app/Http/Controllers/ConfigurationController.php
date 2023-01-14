<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreconfigurationRequest;
use App\Http\Requests\UpdateconfigurationRequest;
use App\Models\configuration;

class ConfigurationController extends Controller
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
     * @param  \App\Http\Requests\StoreconfigurationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreconfigurationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function show(configuration $configuration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function edit(configuration $configuration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateconfigurationRequest  $request
     * @param  \App\Models\configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateconfigurationRequest $request, configuration $configuration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\configuration  $configuration
     * @return \Illuminate\Http\Response
     */
    public function destroy(configuration $configuration)
    {
        //
    }
}
