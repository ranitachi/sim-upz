<?php

namespace App\Http\Controllers;

use App\Model\Kabupatenkota;
use Illuminate\Http\Request;

class KabupatenkotaController extends Controller
{
    public function index()
    {
        $data= Kabupatenkota::all();
        return view('pages.kabupatenKota.index',compact('data'));
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
        $datas = new Kabupatenkota();
        $datas->name = $request->nama;
        $datas->provinsi_id = $request->idprovinsi;
        $datas->save();
        return redirect()->route('kabupaten-kota.index')->with('alert-success','Berhasil Menambahkan Data Kabupaten Kota!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ids = $request->ids;
        $datas = Kabupatenkota::where('id', $ids)->first();
        $datas->name = $request->nama;
        $datas->provinsi_id = $request->idprovinsi;
        $datas->save();
        return redirect()->route('kabupaten-kota.index')->with('alert-success','Berhasil Mengupdate Data Kabupaten Kota!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Kabupatenkota::where('id', $id)->first();
        $datas->delete();
        return redirect()->route('kabupaten-kota.index')->with('alert-success','Berhasil Menghapus Data Kabupaten Kota!');
    }
}
