<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Laporan;
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
        $data = DB::select("SELECT * FROM inventaries");
        return view('home.inventaris.inventaris',compact('data'));
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
        Inventaris::create($request->all());
        
        $request->accepts('session');
        session()->flash('success', 'Berhasil menambahkan data!');

        return redirect('/home/inventaris');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $inventaris= Inventaris::find($id);

        return view('home.inventaris.show',[
            'inventaris'=> $inventaris]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= Inventaris::find($id);

        return view('home.inventaris.edit',[
            'inventaris'=> $edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Inventaris::where('id', $id)->update($request->all());
        
        $request->accepts('session');
        session()->flash('success', 'Berhasil menambahkan data!');

        return redirect('/home/inventaris');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventaris $inventaris)
    {
       Inventaris::destroy($inventaris->id);
        return redirect('/home/inventaris')->with('succes', 'Laporan has been deleted');
    }
    public function delete($id)
    {
        $inventaris = Inventaris::find($id);
        $inventaris->delete();
        $id->accepts('session');
        session()->flash('success', 'Laporan Berhasil dihapus');
        
        return redirect('/home/inventaris')->with('success', 'Laporan berhasil dihapus');
    } 
}
