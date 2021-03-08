<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingRole extends Model
{
    protected $table = 'settingroles';
    protected $fillable = [
        'report_sort',
    ];
}
