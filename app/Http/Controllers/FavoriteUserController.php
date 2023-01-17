<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storefavorite_userRequest;
use App\Http\Requests\Updatefavorite_userRequest;
use App\Models\favorite_user;

class FavoriteUserController extends Controller
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
     * @param  \App\Http\Requests\Storefavorite_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storefavorite_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\favorite_user  $favorite_user
     * @return \Illuminate\Http\Response
     */
    public function show(favorite_user $favorite_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\favorite_user  $favorite_user
     * @return \Illuminate\Http\Response
     */
    public function edit(favorite_user $favorite_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatefavorite_userRequest  $request
     * @param  \App\Models\favorite_user  $favorite_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updatefavorite_userRequest $request, favorite_user $favorite_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\favorite_user  $favorite_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(favorite_user $favorite_user)
    {
        //
    }
}
