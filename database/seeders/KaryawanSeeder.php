<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('karyawans')->insert([
            [
                'nip' => '00112244',
                'name' => 'Ubud',
                'alamat' => 'kp. lebak puay',
                'jenis_kelamin' => 'laki-laki',
                'no_hp'=> '0897611111',
                'user_id'=>2,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], 
    
        ]);
    }
}
