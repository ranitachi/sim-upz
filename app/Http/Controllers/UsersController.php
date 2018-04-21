<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=User::all();
        return view('pages.akun.index',compact('data'));
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
        $name = $request->nama;
        $email = $request->email;
        $password = $request->password;

        $datas = new User();
        $datas->name = $name;
        $datas->email = $email;
        $datas->password = $password;
        $datas->save();
        return redirect()->route('akun.index')->with('alert-success','Berhasil Menambahkan Data Akun!');
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
        $datas = User::where('id',$ids)->first();
        $datas->name = $request->nama;
        $datas->email = $request->email;
        $datas->save();
        return redirect()->route('akun.index')->with('alert-success','Berhasil di Update Data Akun!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = User::where('id',$id)->first();
        $datas->delete();
        return redirect()->route('akun.index')->with('alert-success','Berhasil Menghapus Data Akun!');
    }
}
