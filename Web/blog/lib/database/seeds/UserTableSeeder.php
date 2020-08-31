<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'email'=>'admin@gmail.com',
                'password' =>bcrypt('admin'),
                'level'=>1
            ],
            [
                'email'=>'minh153661@gmail.com',
                'password' =>bcrypt('153661'),
                'level'=>1
            ],
        ];
        DB::table('vp_users')->insert($data);
    }
}
