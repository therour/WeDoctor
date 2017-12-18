<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'username' => 'admin',
        	'password' => bcrypt('adminadmin'),
        	'nama' => 'Admin We Doctor',
        	'status' => 'admin',
        	'email' => 'admin@wedoctor.com',
        	'alamat' => 'Jalan We Doctor',
        	'jenis_kelamin' => 'Laki-laki',
        	'nik' => '16523177'
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            'password' => bcrypt('useruser'),
            'nama' => 'User We Doctor',
            'status' => 'user',
            'email' => 'user@wedoctor.com',
            'alamat' => 'Jalan We Doctor',
            'jenis_kelamin' => 'Laki-laki',
            'nik' => '16523177'
        ]);
    }
}
