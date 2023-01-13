<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorereputationRequest;
use App\Http\Requests\UpdatereputationRequest;
use App\Models\reputation;

class ReputationController extends Controller
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
     * @param  \App\Http\Requests\StorereputationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorereputationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reputation  $reputation
     * @return \Illuminate\Http\Response
     */
    public function show(reputation $reputation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reputation  $reputation
     * @return \Illuminate\Http\Response
     */
    public function edit(reputation $reputation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatereputationRequest  $request
     * @param  \App\Models\reputation  $reputation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatereputationRequest $request, reputation $reputation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reputation  $reputation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reputation $reputation)
    {
        //
    }
}
