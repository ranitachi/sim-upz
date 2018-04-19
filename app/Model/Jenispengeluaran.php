<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jenispengeluaran extends Model
{
    use SoftDeletes;
    private $table='jenis_pengeluaran';
    private $protected = 'deleted_at';
    private $fillable = ['kode','nama_pengeluaran','flag','desc','created_at','updated_at'];
}