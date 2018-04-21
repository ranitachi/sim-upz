<?php

namespace App\Http\Controllers;

use App\Model\Amilin;
use Illuminate\Http\Request;

class AmilinController extends Controller
{
    public function index()
    {
        $data= Amilin::all();
        return view('pages.amilin.index',compact('data'));
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
        $datas = new Amilin();
        $datas->kode = $request->kode;
        $datas->nama = $request->nama;
        $datas->user_id = $request->id_user;
        $datas->alamat = $request->alamat;
        $datas->gender = $request->gender;
        $datas->email = $request->email;
        $datas->hp = $request->hp;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('amilin.index')->with('alert-success','Berhasil Menambahkan Data Amilin!');
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
        $datas = Amilin::where('id', $ids)->first();
        $datas->kode = $request->kode;
        $datas->nama = $request->nama;
        $datas->user_id = $request->id_user;
        $datas->alamat = $request->alamat;
        $datas->gender = $request->gender;
        $datas->email = $request->email;
        $datas->hp = $request->hp;
        $datas->flag = $request->flag;
        $datas->save();
        return redirect()->route('amilin.index')->with('alert-success','Berhasil Mengupdate Data Amilin!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = Amilin::where('id', $id)->first();
        $datas->flag = 0;
        $datas->save();
        return redirect()->route('amilin.index')->with('alert-success','Berhasil Menghapus Data Amilin!');
    }
}
