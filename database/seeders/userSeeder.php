<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'id' => 1,
                'email' => 'user1@mail.com',
                'password' => '12345678',
                'role_id' => '2',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ], 
            [
                'id' => 2,
                'email' => 'admin1@mail.com',
                'password' => '12345678',
                'role_id' => '1',
                'status' => '1',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]

        ]);
    }
}
