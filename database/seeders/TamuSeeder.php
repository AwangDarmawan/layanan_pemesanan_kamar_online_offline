<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tamus')->insert([
            [
                'name' => 'Rudi Salim',
                'alamat' => 'kp. pusing banay',
                'jenis_kelamin' => 'laki-laki',
                'no_hp'=> '0897654123',
                'user_id'=>1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], 
    
        ]);
    }
}
