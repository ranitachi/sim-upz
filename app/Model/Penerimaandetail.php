<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerimaandetail extends Model
{
    use SoftDeletes;
    private $table='penerimaan_detail';
    private $protected = 'deleted_at';
    private $fillable = ['penerimaan_id','jeniszakat_id','jumlah','flag','desc','created_at','updated_at'];

    public function penerimaan()
    {
        return $this->hasMany('App\Model\Penerimaan','penerimaan_id');
    }
    public function jeniszakat()
    {
        return $this->hasMany('App\Model\Jeniszakat','jeniszakat_id');
    }
    
}

