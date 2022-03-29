<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class NegeriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('negeri')->insert([
            [
                'nama_negeri' => 'Johor',
                'kod_negeri' => '01',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Kedah',
                'kod_negeri' => '02',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Kelantan',
                'kod_negeri' => '03',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Melaka',
                'kod_negeri' => '04',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Negeri Sembilan',
                'kod_negeri' => '05',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Pahang',
                'kod_negeri' => '06',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Pulau Pinang',
                'kod_negeri' => '07',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Perak',
                'kod_negeri' => '08',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Perlis',
                'kod_negeri' => '09',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Selangor',
                'kod_negeri' => '10',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Terengganu',
                'kod_negeri' => '11',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Sabah',
                'kod_negeri' => '12',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Sarawak',
                'kod_negeri' => '13',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Kuala Lumpur',
                'kod_negeri' => '14',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Labuan',
                'kod_negeri' => '15',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
            [
                'nama_negeri' => 'Putrajaya',
                'kod_negeri' => '16',
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
            ],
        ]);
    }
}
