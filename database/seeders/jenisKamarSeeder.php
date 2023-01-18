<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class jenisKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jenis_kamars')->insert([
            [
                'id' => 1,
                'name' => 'Singgle Room',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], 
            [
                'id' => 2,
                'name' => 'Double Room',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], 
            [
                'id' => 3,
                'name' => 'Twin Room',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
            
        ]);
    }
}
