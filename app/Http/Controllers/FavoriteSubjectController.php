<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storefavorite_subjectRequest;
use App\Http\Requests\Updatefavorite_subjectRequest;
use App\Models\favorite_subject;

class FavoriteSubjectController extends Controller
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
     * @param  \App\Http\Requests\Storefavorite_subjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storefavorite_subjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\favorite_subject  $favorite_subject
     * @return \Illuminate\Http\Response
     */
    public function show(favorite_subject $favorite_subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\favorite_subject  $favorite_subject
     * @return \Illuminate\Http\Response
     */
    public function edit(favorite_subject $favorite_subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatefavorite_subjectRequest  $request
     * @param  \App\Models\favorite_subject  $favorite_subject
     * @return \Illuminate\Http\Response
     */
    public function update(Updatefavorite_subjectRequest $request, favorite_subject $favorite_subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\favorite_subject  $favorite_subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(favorite_subject $favorite_subject)
    {
        //
    }
}
