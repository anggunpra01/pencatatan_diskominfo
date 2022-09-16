<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('home.laporan.laporan',[
            'laporans'=> Laporan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('home.laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedDate =$request->validate([
            'token'=>'required',
            'slug'=>'required',
            'nippencatat'=> 'required',
            'namapencatat'=> 'required',
            'tanggalmencatat'=> 'required',
            'namapelapor'=> 'required',
            'namabidang'=> 'required',
            'nomorhp'=> 'required',
            'permasalahan'=> 'required',
            'nipeksekutor'=> 'required',
            'namaeksekutor'=> 'required',
            'kategori'=> 'required',
            'status'=> 'required',
            'tanggalselesai'=> 'required',
            'solusi'=> 'required',
            'namavendor'=> 'required',
            'mulaiservice'=> 'required',
            'selesaiservice'=> 'required'
        ]);

        Laporan::create($validatedDate);

        $request->accepts('session');
        session()->flash('success', 'Berhasil menambahkan user!');

        return redirect('/home/laporan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        return view('home.laporan.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        //
    }

    public function cekSlug(Request $request){
        $slug = SlugService::createSlug(Laporan::class, 'slug', $request->token);
        return response()->json(['slug'=>$slug]);
    }
}
