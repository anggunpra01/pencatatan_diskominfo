<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaris = Inventaris::all();
        return view('home.inventaris.inventaris', ['inventarist'=> $inventaris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('home.inventaris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedDate = $request->validate([
            'kode_inventaris',
            'kategori',
            'merk',
            'tipe',
            'nomor_seri',
            'tahun_pembelian',
            'kondisi',
            'lokasi_fisik',
            'bidang',
            'pengguna',
            'keterangan'
        ]);
        Inventaris::create($validatedDate); 
        $request->accepts('session');
        session()->flash('success', 'Laporan berhasil dibuat!');
        return redirect('/home/inventaris')->with('succes', 'New Post has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventaris = Inventaris::find($id);

        return view('home.laporan.show',[
            'laporan'=> $inventaris]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Inventaris::find($id);
     
        return view ('home.inventaris.edit',[
            'edit'=>$edit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventaris $inventaris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaris $inventaris)
    {
        //
    }
}
