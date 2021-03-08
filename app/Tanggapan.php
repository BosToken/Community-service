<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapans';
    protected $fillable = [
        'pengaduan_id',
        'tanggapan',
        'user_id',
    ];
    public function pengaduans () {
        return $this->belongsTo('App\Pengaduan', 'pengaduan_id');
    }

    public function users () {
        return $this->belongsTo('App\User', 'user_id');
    }

}
