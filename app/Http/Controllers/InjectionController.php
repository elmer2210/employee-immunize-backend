<?php

namespace App\Http\Controllers;

use App\Models\Injection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InjectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Injection::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'injection_type' => 'required',
            'injectiondate' => 'required',
            'dosis'=>'required',
        ]);

        return Injection::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Injection  $injection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Injection::findOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Injection  $injection
     * @return \Illuminate\Http\Response
     */
    public function edit(Injection $injection)
    {
        //
        return Injection($injection);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Injection  $injection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Injection $injection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Injection  $injection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Injection $injection)
    {
        //
    }
}
