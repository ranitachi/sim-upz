<?php

namespace App\Http\Controllers;

use App\Model\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        $data= Kelurahan::all();
        return view('pages.kelurahan.index',compact('data'));
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
        $datas = new Kelurahan();
        $datas->name = $request->nama;
        $datas->kecamatan_id = $request->kecamatan;
        $datas->save();
        return redirect()->route('kelurahan.index')->with('alert-success','Berhasil Menambahkan Data Kelurahan!');
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
        $datas = Kelurahan::where('id', $ids)->first();
        $datas->name = $request->nama;
        $datas->kecamatan_id = $request->kecamatan;
        $datas->save();
        return redirect()->route('kelurahan.index')->with('alert-success','Berhasil Mengupdate Data Kelurahan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas =  Kelurahan::where('id', $id)->first();
        $datas->delete();
        return redirect()->route('kelurahan.index')->with('alert-success','Berhasil Menghapus Data Kelurahan!');
    }
}
