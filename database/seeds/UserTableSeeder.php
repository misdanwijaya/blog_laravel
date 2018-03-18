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
        // set foreign key 0 if use mysql
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        //Reset data user
        DB::table('users')->truncate();

        //insert dummy user
        DB::table('users')->insert([
            [
                'name' => 'Misdan Wijaya',
                'email' => 'misdan.wijaya07@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Galih',
                'email' => 'galih@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Rani',
                'email' => 'rani@gmail.com',
                'password' => bcrypt('123456'),
            ]
        ]);
        // set foreign key 0 if use mysql
    	DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
