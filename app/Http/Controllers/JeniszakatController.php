<?php

namespace App\Http\Controllers;

use App\Model\Jeniszakat;
use Illuminate\Http\Request;

class JeniszakatController extends Controller
{
    public function index()
    {
        $data= Jeniszakat::where('kategori','zakat')->get();
        return view('pages.jenisZakat.index',compact('data'));
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
        $datas = new Jeniszakat();
        $datas->kode = $request->kode;
        $datas->jenis = $request->jenis;
        $datas->kategori = "zakat";
        $datas->desc = $request->desc;
        $datas->save();
        return redirect()->route('jenis-zakat.index')->with('alert-success','Berhasil Menambahkan Data Jenis Zakat!');
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
        $ids = $request->id;
        $datas = Jeniszakat::where('id', $ids)->first();
        $datas->kode = $request->kode;
        $datas->jenis = $request->jenis;
        $datas->kategori = "zakat";
        $datas->desc = $request->desc;
        $datas->save();
        return redirect()->route('jenis-zakat.index')->with('alert-success','Berhasil mengupdate Data Jenis Zakat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Jeniszakat::where('id', $id)->first();
        $datas->delete();
        return redirect()->route('jenis-zakat.index')->with('alert-success','Berhasil Menghapus Data Jenis Zakat!');
    }
}
