<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amilin extends Model
{
    use SoftDeletes;
    private $table='amilin';
    private $protected = 'deleted_at';
    private $fillable = ['kode','nama','user_id','alamat','gender','email','hp','flag','created_at','updated_at'];
    public function user()
    {
        return $this->hasMany('App\Provinsi','user_id');
    }
}
