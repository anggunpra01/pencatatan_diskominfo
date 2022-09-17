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
        // $laporan = Laporan::all();
        // dd($laporan);
        return view('home.laporan.laporan', [
            'laporans' => Laporan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedDate = $request->validate([
            'token' => 'required',
            'slug' => 'required',
            'nippencatat' => 'required',
            'namapencatat' => 'required',
            'tanggalmencatat' => 'required',
            'namapelapor' => 'required',
            'namabidang' => 'required',
            'nomorhp' => 'required',
            'permasalahan' => 'required',
            'nipeksekutor' => 'required',
            'namaeksekutor' => 'required',
            'kategori' => 'required',
            'status' => 'required',
            'tanggalselesai' => 'required',
            'solusi' => 'required',
            'namavendor' => 'required',
            'mulaiservice' => 'required',
            'selesaiservice' => 'required'
        ]);
        Laporan::create($validatedDate);
        return redirect('/home/laporan')->with('success', 'Laporan berhasil ditambahkan');
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

    // edit
    public function edit($id)
    {
        $laporan = Laporan::find($id);
        return view('home.laporan.edit', compact('laporan'));
    }
    // editAttempt
    public function editAttempt(Request $request, $id)
    {
        $laporan = Laporan::find($id);
        $laporan->token = $request->token;
        $laporan->slug = $request->slug;
        $laporan->nippencatat = $request->nippencatat;
        $laporan->namapencatat = $request->namapencatat;
        $laporan->tanggalmencatat = $request->tanggalmencatat;
        $laporan->namapelapor = $request->namapelapor;
        $laporan->namabidang = $request->namabidang;
        $laporan->nomorhp = $request->nomorhp;
        $laporan->permasalahan = $request->permasalahan;
        $laporan->nipeksekutor = $request->nipeksekutor;
        $laporan->namaeksekutor = $request->namaeksekutor;
        $laporan->kategori = $request->kategori;
        $laporan->status = $request->status;
        $laporan->tanggalselesai = $request->tanggalselesai;
        $laporan->solusi = $request->solusi;
        $laporan->namavendor = $request->namavendor;
        $laporan->mulaiservice = $request->mulaiservice;
        $laporan->selesaiservice = $request->selesaiservice;
        $laporan->save();
        return redirect('/home/laporan')->with('success', 'Laporan berhasil diubah');
    }





    public function cekSlug(Request $request)
    {
        $slug = SlugService::createSlug(Laporan::class, 'slug', $request->token);
        return response()->json(['slug' => $slug]);
    }

    // delete
    public function delete($id)
    {
        $laporan = Laporan::find($id);
        $laporan->delete();
        return redirect('/home/laporan')->with('success', 'Laporan berhasil dihapus');
    }
}
