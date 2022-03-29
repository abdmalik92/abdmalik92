<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('daerah')->insert([
            [
                'nama_daerah' => 'Kuala Terengganu',
                'kod_daerah' => null,
                'created_at' => '2022-02-12 15:00:00',
                'updated_at' => '2022-02-12 15:00:00',
            ],
            [
                'nama_daerah' => 'Kuala Nerus',
                'kod_daerah' => null,
                'created_at' => '2022-02-12 15:00:00',
                'updated_at' => '2022-02-12 15:00:00',
            ],
            [
                'nama_daerah' => 'Hulu Terengganu',
                'kod_daerah' => null,
                'created_at' => '2022-02-12 15:00:00',
                'updated_at' => '2022-02-12 15:00:00',
            ],
            [
                'nama_daerah' => 'Marang',
                'kod_daerah' => null,
                'created_at' => '2022-02-12 15:00:00',
                'updated_at' => '2022-02-12 15:00:00',
            ],
            [
                'nama_daerah' => 'Dungun',
                'kod_daerah' => null,
                'created_at' => '2022-02-12 15:00:00',
                'updated_at' => '2022-02-12 15:00:00',
            ],
            [
                'nama_daerah' => 'Kemaman',
                'kod_daerah' => null,
                'created_at' => '2022-02-12 15:00:00',
                'updated_at' => '2022-02-12 15:00:00',
            ],
            [
                'nama_daerah' => 'Setiu',
                'kod_daerah' => null,
                'created_at' => '2022-02-12 15:00:00',
                'updated_at' => '2022-02-12 15:00:00',
            ],
            [
                'nama_daerah' => 'Besut',
                'kod_daerah' => null,
                'created_at' => '2022-02-12 15:00:00',
                'updated_at' => '2022-02-12 15:00:00',
            ]
        ]);
    }
}
