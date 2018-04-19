<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    //
    private $table='kecamatan';
    private $fillable = ['kabupaten_kota_id','name','created_at','updated_at'];

   
    public function kabupatenkota()
    {
        return $this->hasMany('App\Model\Kabupatenkota','kabupaten_kota_id');
    }
   
}
