<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jeniszakat extends Model
{
    use Softdeletes;
    private $table='jenis_zakat_infak';
    private $protected = 'deleted_at';
    private $fillable = ['kode','jenis','kategori','desc','created_at','updated_at'];
}
