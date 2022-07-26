<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('users')->insert([
            'nama' => '3D SDU',
            'username' => 'unudnofukatsu',
            'password' => bcrypt('3691203d14045'),
        ]);
    }
}
