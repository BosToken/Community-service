<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pengaduan;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Pengaduan::class, function (Faker $faker) {
    return [
        'tgl_pengaduan' => now(),
        'user_id' => 3,
        'isi_laporan' => $faker->text,
        'foto' => 'https://i.stack.imgur.com/6M513.png',
        'status' => $faker->randomElement([ 1, 2 , 3]),
        'assigned_on_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
