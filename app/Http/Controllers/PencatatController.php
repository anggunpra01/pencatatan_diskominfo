<?php

namespace App\Http\Controllers;

use App\Models\Pencatat;
use Illuminate\Http\Request;

class PencatatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('home.pencatat.pencatat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('home.pencatat.create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pencatat  $pencatat
     * @return \Illuminate\Http\Response
     */
    public function show(Pencatat $pencatat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pencatat  $pencatat
     * @return \Illuminate\Http\Response
     */
    public function edit(Pencatat $pencatat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pencatat  $pencatat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pencatat $pencatat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pencatat  $pencatat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pencatat $pencatat)
    {
        //
    }
}
