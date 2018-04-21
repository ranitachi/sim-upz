<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Muzzaki extends Model
{
    use SoftDeletes;
    //private $table='mustahik';
    protected $table='muzzaki';
    private $protected = 'deleted_at';
    //private $fillable = ['kode','nama','alamat','provinsi_id','kabupaten_kota_id','kecamatan_id','kelurahan_id','kodepos','gender','no_indentitas','jenis_identitas','tempat_lahir','tanggal_lahir','no_telp','hp','email','pekerjaan','flag','desc','created_at','updated_at'];
    protected $fillable = ['kode','nama','alamat','provinsi_id','kabupaten_kota_id','kecamatan_id','kelurahan_id','kodepos','gender','no_indentitas','jenis_identitas','tempat_lahir','tanggal_lahir','no_telp','hp','email','pekerjaan','flag','desc','created_at','updated_at'];

    public function provinsi()
    {
        return $this->hasMany('App\Model\Provinsi','provinsi_id');
    }
    public function kabupatenkota()
    {
        return $this->hasMany('App\Model\Kabupatenkota','kabupaten_kota_id');
    }
    public function kecamatan()
    {
        return $this->hasMany('App\Model\Kecamatan','kecamatan_id');
    }
    public function kelurahan()
    {
        return $this->hasMany('App\Model\Kelurahan','kelurahan_id');
    }
}

