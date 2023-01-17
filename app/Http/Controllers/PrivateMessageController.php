<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeprivate_messageRequest;
use App\Http\Requests\Updateprivate_messageRequest;
use App\Models\private_message;

class PrivateMessageController extends Controller
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
     * @param  \App\Http\Requests\Storeprivate_messageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeprivate_messageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\private_message  $private_message
     * @return \Illuminate\Http\Response
     */
    public function show(private_message $private_message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\private_message  $private_message
     * @return \Illuminate\Http\Response
     */
    public function edit(private_message $private_message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateprivate_messageRequest  $request
     * @param  \App\Models\private_message  $private_message
     * @return \Illuminate\Http\Response
     */
    public function update(Updateprivate_messageRequest $request, private_message $private_message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\private_message  $private_message
     * @return \Illuminate\Http\Response
     */
    public function destroy(private_message $private_message)
    {
        //
    }
}
