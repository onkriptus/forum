<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeuser_reportRequest;
use App\Http\Requests\Updateuser_reportRequest;
use App\Models\user_report;

class UserReportController extends Controller
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
     * @param  \App\Http\Requests\Storeuser_reportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeuser_reportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_report  $user_report
     * @return \Illuminate\Http\Response
     */
    public function show(user_report $user_report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_report  $user_report
     * @return \Illuminate\Http\Response
     */
    public function edit(user_report $user_report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateuser_reportRequest  $request
     * @param  \App\Models\user_report  $user_report
     * @return \Illuminate\Http\Response
     */
    public function update(Updateuser_reportRequest $request, user_report $user_report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_report  $user_report
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_report $user_report)
    {
        //
    }
}
