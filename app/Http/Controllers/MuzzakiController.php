<?php

namespace App\Http\Controllers;

use App\Model\Muzzaki;
use Illuminate\Http\Request;

class MuzzakiController extends Controller
{
    public function index()
    {
        $data= Muzzaki::all();
        return view('pages.muzaki.index',compact('data'));
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
        $datas = new Muzzaki();
        $datas->kode = $request->kode;
        $datas->nama = $request->nama;
        $datas->alamat = $request->alamat;
        $datas->provinsi_id = $request->provinsi;
        $datas->kabupaten_kota_id = $request->kabupaten;
        $datas->kecamatan_id = $request->kecamatan;
        $datas->kelurahan_id = $request->kelurahan;
        $datas->kodepos = $request->kodepos;
        $datas->gender = $request->gender;
        $datas->no_indentitas = $request->noidentitas;
        $datas->jenis_identitas = $request->jenisidentitas;
        $datas->tempat_lahir = $request->tempatlahir;
        $datas->tanggal_lahir = $request->tgllahir;
        $datas->no_telp = $request->notelp;
        $datas->hp = $request->nohp;
        $datas->email = $request->email;
        $datas->pekerjaan = $request->pekerjaan;
        $datas->desc = $request->desc;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('muzzaki.index')->with('alert-success','Berhasil Menambahkan Data Muzzaki!');
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
        $datas = Muzzaki::where('id', $ids)->first();
        $datas->kode = $request->kode;
        $datas->nama = $request->nama;
        $datas->alamat = $request->alamat;
        $datas->provinsi_id = $request->provinsi;
        $datas->kabupaten_kota_id = $request->kabupaten;
        $datas->kecamatan_id = $request->kecamatan;
        $datas->kelurahan_id = $request->kelurahan;
        $datas->kodepos = $request->kodepos;
        $datas->gender = $request->gender;
        $datas->no_indentitas = $request->noidentitas;
        $datas->jenis_identitas = $request->jenisidentitas;
        $datas->tempat_lahir = $request->tempatlahir;
        $datas->tanggal_lahir = $request->tgllahir;
        $datas->no_telp = $request->notelp;
        $datas->hp = $request->nohp;
        $datas->email = $request->email;
        $datas->pekerjaan = $request->pekerjaan;
        $datas->desc = $request->desc;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('muzzaki.index')->with('alert-success','Berhasil Mengupdate Data Muzzaki!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Muzzaki::where('id', $id)->first();
        $datas->flag = 0;
        $datas->save();
        return redirect()->route('muzzaki.index')->with('alert-success','Berhasil Menghapus Data Muzzaki!');
    }
}
