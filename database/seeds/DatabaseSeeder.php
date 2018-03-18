<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //di editor error tapi bisa jalanS
        $this->call(UserTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
