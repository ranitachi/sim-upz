<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengeluaran extends Model
{
    use SoftDeletes;
    private $table='pengeluaran';
    private $protected = 'deleted_at';
    private $fillable = ['kode_trans','tanggal_transaksi','total','flag','desc','created_at','updated_at'];

    
}

