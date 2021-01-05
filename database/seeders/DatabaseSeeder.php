<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use \Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'S',
            'email' => '107b11602@mailst.cjcu.edu.tw',
            'password' => bcrypt('Y1234567'),
        ]);
    }
}
