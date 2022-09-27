<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Carbon\Carbon;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Support\ValidatedData;
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
        $laporan = Laporan::all();
        
        $tanggals = Carbon::now()->format('Y-m-d');
        $now = Carbon::now();

        $thnBulan = $now->year . $now->month;
        $urut = '001';
        $token = 'LP'. $thnBulan.$urut;

        // dd($token);

        return view('home.laporan.laporan', ['laporans'=> $laporan]);
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
            'nipeksekutor',
            'namaeksekutor',
            'kategori',
            'status',
            'tanggalselesai',
            'solusi',
            'namavendor',
            'mulaiservice',
            'selesaiservice'
        ]);

        Laporan::create($validatedDate); 
        return redirect('/home/laporan')->with('succes', 'New Post has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        return view('home.laporan.show',[
            'laporan'=> $laporan]);
    }

    // edit
    public function edit(Laporan $laporan)
    {
        return view ('home.laporan.edit',[
            'laporan'=>$laporan
        ]);
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
        $rules =$request->validate([
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
            'namavendor',
            'mulaiservice',
            'selesaiservice'
        ]);
        if ($request->slug != $laporan->slug){
            $rules['slug']='required';
        }
        Laporan::where ('token', $laporan->token)->update($rules); 
        return redirect('/home/laporan')->with('succes', 'Laporan has been Added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        Laporan::destroy($laporan->id);
        return redirect('/home/laporan')->with('succes', 'Laporan has been deleted');
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
