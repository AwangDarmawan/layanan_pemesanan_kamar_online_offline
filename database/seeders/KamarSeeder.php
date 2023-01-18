<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kamars')->insert([
            [
                'no_kamar' => '1A',
                'jenis_kamar_id' => 1,
                'status_id' => 1,
                'harga' => 200000,
                'foto_kamar' => '111jpg',
                'foto_wc' => '112jpg',
                'deskripsi' => 'Cocok untuk yang suka harga hemat dan yang seneng liburan sendiri. Fasilitas yang tersedia akan memuaskan anda tersedia satu tempat tidur dan Wc dengan desain yang elegan',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], 
            [
                'no_kamar' => '1b',
                'jenis_kamar_id' => 1,
                'status_id' => 1,
                'harga' => 181000,
                'foto_kamar' => '114jpg',
                'foto_wc' => '115jpg',
                'deskripsi' => 'Cocok untuk yang suka harga hemat dan yang seneng liburan sendiri. Fasilitas yang tersedia akan memuaskan anda tersedia satu tempat tidur dan Wc dengan desain yang elegan',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], 
            [
                'no_kamar' => '1B',
                'jenis_kamar_id' => 2,
                'status_id' => 1,
                'harga' => '400000',
                'foto_kamar' => '121jpg',
                'foto_wc' => '122jpg',
                'deskripsi' => 'Sangat ramah disuasana suami dan istri yang ingin menginap, dengan fasilitas malam pertama menyediakan 1 tempat tidur berukuran besar',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
            
        ]);
    }
}
