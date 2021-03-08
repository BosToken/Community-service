<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Pengaduan extends Model
{
    protected $table = 'pengaduans';
    protected $fillable = [
        'user_id',
        'isi_laporan',
        'foto',
        'status',
    ];
    public function users () {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function tanggapans () {
        return $this->belongsTo('App\Tanggapan');
    }
}
