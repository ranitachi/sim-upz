<?php

namespace App\Http\Controllers;

use App\Model\Upz;
use Illuminate\Http\Request;

class UpzController extends Controller
{
    public function index()
    {
        $data= Upz::all();
        return view('pages.upz.index',compact('data'));
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
        $datas = new Upz();
        $datas->kode = $request->kode;
        $datas->nama_upz = $request->namaUpz;
        $datas->alamat = $request->alamat;
        $datas->provinsi_id = $request->provinsi;
        $datas->kabupaten_kota_id = $request->kabupaten;
        $datas->kecamatan_id = $request->kecamatan;
        $datas->kelurahan_id = $request->kelurahan;
        $datas->kodepos = $request->kodepos;
        $datas->pimpinan = $request->pimpinan;
        $datas->no_telp = $request->notelp;
        $datas->email = $request->email;
        $datas->longitude = $request->longtitude;
        $datas->lattitude = $request->latitude;
        $datas->website = $request->website;
        $datas->desc = $request->desc;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('upz.index')->with('alert-success','Berhasil Menambahkan Data Upz!');
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
        $datas = Upz::where('id', $ids)->first();
        $datas->kode = $request->kode;
        $datas->nama_upz = $request->namaUpz;
        $datas->alamat = $request->alamat;
        $datas->provinsi_id = $request->provinsi;
        $datas->kabupaten_kota_id = $request->kabupaten;
        $datas->kecamatan_id = $request->kecamatan;
        $datas->kelurahan_id = $request->kelurahan;
        $datas->kodepos = $request->kodepos;
        $datas->pimpinan = $request->pimpinan;
        $datas->no_telp = $request->notelp;
        $datas->email = $request->email;
        $datas->longitude = $request->longtitude;
        $datas->lattitude = $request->latitude;
        $datas->website = $request->website;
        $datas->desc = $request->desc;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('upz.index')->with('alert-success','Berhasil Mengupdate Data Upz!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Upz::where('id', $id)->first();
        $datas->flag = 0;
        $datas->save();
        return redirect()->route('upz.index')->with('alert-success','Berhasil Menghapus Data Upz!');
    }
}
