<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatusKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('status_kamars')->insert([
            [
                'id' => 1,
                'name' => 'Kosong',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], 
            [
                'id' => 2,
                'name' => 'TerISi',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], 
            [
                'id' => 3,
                'name' => 'Dalam Perbaikan',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]
            
        ]);
    }
}
