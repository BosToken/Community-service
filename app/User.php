<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'nama',
        'username',
        'password',
        'telp',
        'role_id',
    ];
    public function pengaduans () {
        return $this->hasMany('App\pengaduan');
    }

    public function tanggapans () {
        return $this->hasMany('App\Tanggapan');
    }

}