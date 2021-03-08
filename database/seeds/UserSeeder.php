<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'nama' => 'Faiz',
            'username' => 'BosToken',
            'password' => 'BosToken',
            'telp' => '081xxxxxxxxxxxx',
            'role_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'nama' => 'Rizky',
            'username' => 'Nue',
            'password' => 'Nue',
            'telp' => '081xxxxxxxxxxxx',
            'role_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => '3',
            'nama' => 'Zidan',
            'username' => 'Mellow',
            'password' => 'Mellow',
            'telp' => '081xxxxxxxxxxxx',
            'role_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
