<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    //
    //private $table='kelurahan';
    //private $fillable = ['kecamatan_id','name','created_at','updated_at'];
    protected $table='kelurahan';
    protected $fillable = ['kecamatan_id','name','created_at','updated_at'];
  
    public function kecamatan()
    {
        return $this->hasMany('App\Model\Kecamatan','kecamatan_id');
    } 
}
