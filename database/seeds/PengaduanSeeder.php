<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengaduans')->insert([
            'id' => '1',
            'tgl_pengaduan' => date('Y-m-d H:i:s'),
            'user_id' => 3,
            'isi_laporan' => 'PLN Padam Teros',
            'foto' => 'https://danbooru.donmai.us/data/sample/__roboco_san_hololive_drawn_by_satobitob__sample-0419127a5f86131fd00c6e45f20fca02.jpg',
            'status' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pengaduans')->insert([
            'id' => '2',
            'tgl_pengaduan' => date('Y-m-d H:i:s'),
            'user_id' => 3,
            'isi_laporan' => 'PDAM Kesumbat plastik',
            'foto' => 'https://scontent-cgk1-2.xx.fbcdn.net/v/t1.0-9/123141965_810797286375537_4198471656713674658_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=ZJ8CGa48T9gAX-T4yUY&_nc_ht=scontent-cgk1-2.xx&oh=08fc03c0f7769ed0da48715ca2e30bd0&oe=6068CA37',
            'status' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('pengaduans')->insert([
            'id' => '3',
            'tgl_pengaduan' => date('Y-m-d H:i:s'),
            'user_id' => 3,
            'isi_laporan' => 'Lampu Merah Kesatrian Mati',
            'foto' => 'https://3.bp.blogspot.com/-r19BBKjNl_0/WoKB2WNL5aI/AAAAAAAACBY/-bK4eZ_U6Ls-19y012xS_v3fq8Za8N7oACLcBGAs/s1600/two%2Bpoint%2Bfive%2Bsanketsu%2Bshojo%2BSayuri.jpg',
            'status' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
