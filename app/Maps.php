<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    protected $table = 'maps';

    protected $fillable = ['id','maps', 'loai'];

    public $timestamps = true;

    public function diachikhachhang(){
        return $this->belongsTo('App\DiaChiKhachHang');
    }
}
