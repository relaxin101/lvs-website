<?php

namespace App\Http\Controllers;

use App\Models\Teilnehmer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeilnehmerRequest;
use App\Http\Requests\UpdateTeilnehmerRequest;

class TeilnehmerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeilnehmerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Teilnehmer $teilnehmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teilnehmer $teilnehmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeilnehmerRequest $request, Teilnehmer $teilnehmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teilnehmer $teilnehmer)
    {
        //
    }
}
