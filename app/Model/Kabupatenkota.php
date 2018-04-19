<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kabupatenkota extends Model
{
    //
    private $table='kabupaten_kota';
    private $fillable = ['provinsi_id','name','created_at','updated_at'];

    public function provinsi()
    {
        return $this->hasMany('App\Model\Provinsi','provinsi_id');
    }
}
