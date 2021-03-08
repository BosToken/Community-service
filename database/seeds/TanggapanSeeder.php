<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TanggapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tanggapans')->insert([
            'id' => '1',
            'pengaduan_id' => '3',
            'tanggapan' => 'Segera Kita Perbaiki',
            'user_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
