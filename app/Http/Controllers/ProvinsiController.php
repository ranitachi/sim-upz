<?php

namespace App\Http\Controllers;

use App\Model\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $data= Provinsi::all();
        return view('pages.provinsi.index',compact('data'));
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
        $datas = new Provinsi();
        $datas->name = $request->nama;
        $datas->save();
        return redirect()->route('provinsi.index')->with('alert-success','Berhasil Menambahkan Data Provinsi!');
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
        $datas = Provinsi::where('id', $ids)->first();
        $datas->name = $request->nama;
        $datas->save();
        return redirect()->route('provinsi.index')->with('alert-success','Berhasil Mengupdate Data Provinsi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Provinsi::where('id',$id)->first();
        $datas->delete();
        return redirect()->route('provinsi.index')->with('alert-success','Berhasil Menghapus Data Provinsi!');
    }
}
