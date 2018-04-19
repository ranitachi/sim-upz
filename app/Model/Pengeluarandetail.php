<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengeluarandetail extends Model
{
    use SoftDeletes;
    private $table='pengeluaran_detail';
    private $protected = 'deleted_at';
    private $fillable = ['pengeluaran_id','jenis_pengeluaran_id','mustahik_id','jumlah','flag','desc','created_at','updated_at'];

    public function mustahik()
    {
        return $this->hasMany('App\Model\Mustahik','mustahik_id');
    }
    public function pengeluaran()
    {
        return $this->hasMany('App\Model\Pengeluaran','pengeluaran_id');
    }
    public function jenispengeluaran()
    {
        return $this->hasMany('App\Model\Jenispengeluaran','jenis_pengeluaran_id');
    }
    
}

