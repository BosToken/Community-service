<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settingroles')->insert([
            'id' => '1',
            'role_sort' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
