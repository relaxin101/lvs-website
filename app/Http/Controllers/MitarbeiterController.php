<?php

namespace App\Http\Controllers;

use App\Models\Mitarbeiter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMitarbeiterRequest;
use App\Http\Requests\UpdateMitarbeiterRequest;

class MitarbeiterController extends Controller
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
    public function store(StoreMitarbeiterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mitarbeiter $mitarbeiter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mitarbeiter $mitarbeiter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMitarbeiterRequest $request, Mitarbeiter $mitarbeiter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mitarbeiter $mitarbeiter)
    {
        //
    }
}
