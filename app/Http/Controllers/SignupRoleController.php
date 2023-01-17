<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storesignup_roleRequest;
use App\Http\Requests\Updatesignup_roleRequest;
use App\Models\signup_role;

class SignupRoleController extends Controller
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
     * @param  \App\Http\Requests\Storesignup_roleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storesignup_roleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\signup_role  $signup_role
     * @return \Illuminate\Http\Response
     */
    public function show(signup_role $signup_role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\signup_role  $signup_role
     * @return \Illuminate\Http\Response
     */
    public function edit(signup_role $signup_role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatesignup_roleRequest  $request
     * @param  \App\Models\signup_role  $signup_role
     * @return \Illuminate\Http\Response
     */
    public function update(Updatesignup_roleRequest $request, signup_role $signup_role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\signup_role  $signup_role
     * @return \Illuminate\Http\Response
     */
    public function destroy(signup_role $signup_role)
    {
        //
    }
}
