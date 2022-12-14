<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\ValidatedData;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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
        // dd($urut);

        return view('home.laporan.laporan', ['laporans'=> $laporan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        //token
        $now = Carbon::now();

        $tglLaporan = Carbon::now()->format('d/m/Y');
        
        $urut = DB::table('laporans')->orderBy('id', 'desc')->first()->id;
        $thnBulan = $now->year . $now->month;
        

        $token = 'LP'. $thnBulan . sprintf('%03d', $urut +1);
        

        return view('home.laporan.create', ['token'=> $token, 'urut'=>$urut, 'tglLaporan'=>$tglLaporan]);
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
        $request->accepts('session');
        session()->flash('success', 'Laporan berhasil dibuat!');
        return redirect('/home/laporan')->with('succes', 'New Post has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $laporan = Laporan::find($id);

        return view('home.laporan.show',[
            'laporan'=> $laporan]);
    }

    // edit
    public function edit($id)
    {
        $edit = Laporan::find($id);
     
        return view ('home.laporan.edit',[
            'edit'=>$edit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Laporan::where('id', $id)->update([
            'nipeksekutor' => $request->nipeksekutor,
            'namaeksekutor' => $request->namaeksekutor,
            'kategori' => $request->kategori,
            'status' => $request->status,
            'tanggalselesai' => $request->tanggalselesai,
            'solusi' => $request->solusi,
            'namavendor' => $request->namavendor,
            'mulaiservice' => $request->mulaiservice,
            'selesaiservice' => $request->selesaiservice,
        ]);
        
        $request->accepts('session');
        session()->flash('success', 'Berhasil mengubah data pegawai!');

        return redirect('/home/laporan')->with('succes', 'New Post has been Added');
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


    // delete
    public function delete($id)
    {
        $laporan = Laporan::find($id);
        $laporan->delete();
        $id->accepts('session');
        session()->flash('success', 'Laporan Berhasil dihapus');
        
        return redirect('/home/laporan')->with('success', 'Laporan berhasil dihapus');
    }
}
