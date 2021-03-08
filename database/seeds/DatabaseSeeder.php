<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PengaduanSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(TanggapanSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(SettingRoleSeeder::class);

        // factory(App\User::class, 3)->create()->each(function ($user) {
        //     $user->pengaduans()->save(factory(App\Pengaduan::class, 5)->make());
        // });
    }
}
