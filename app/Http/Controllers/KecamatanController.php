<?php

namespace App\Http\Controllers;

use App\Model\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        $data= Kecamatan::all();
        return view('pages.kecamatan.index',compact('data'));
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
        $datas = new Kecamatan();
        $datas->name = $request->nama;
        $datas->kabupaten_kota_id = $request->kabupaten;
        $datas->save();
        return redirect()->route('kecamatan.index')->with('alert-success','Berhasil Menambahkan Data Kecamatan!');
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
        $datas = Kecamatan::where('id',$ids)->first();
        $datas->name = $request->nama;
        $datas->kabupaten_kota_id = $request->kabupaten;
        $datas->save();
        return redirect()->route('kecamatan.index')->with('alert-success','Berhasil Mengupdate Data Kecamatan!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Kecamatan::where('id',$id)->first();
        $datas->delete();
        return redirect()->route('kecamatan.index')->with('alert-success','Berhasil Menghapus Data Kecamatan!');
    }
}
