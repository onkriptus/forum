<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelanguageRequest;
use App\Http\Requests\UpdatelanguageRequest;
use App\Models\language;

class LanguageController extends Controller
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
     * @param  \App\Http\Requests\StorelanguageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelanguageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelanguageRequest  $request
     * @param  \App\Models\language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelanguageRequest $request, language $language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(language $language)
    {
        //
    }
}
