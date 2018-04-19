<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerimaan extends Model
{
    use SoftDeletes;
    private $table='penerimaan';
    private $protected = 'deleted_at';
    private $fillable = ['kode_trans','tanggal_transaksi','muzzaki_id','amilin_id','total','flag','desc','created_at','updated_at'];


    public function muzzaki()
    {
        return $this->hasMany('App\Model\Muzzaki','muzzaki_id');
    }
    public function amilin()
    {
        return $this->hasMany('App\Model\Amilin','amilin_id');
    }
    
}

