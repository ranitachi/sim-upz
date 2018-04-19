<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jenisasnaf extends Model
{
    use SoftDeletes;
    private $table='jenis_asnaf';
    private $protected = 'deleted_at';
    private $fillable = ['kode','asnaf','desc','created_at','updated_at'];
}
