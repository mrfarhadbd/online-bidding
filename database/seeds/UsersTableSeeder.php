<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Mahedul',
            'last_name' => 'Hasan',
            'name' => 'Mahedul Hasan',
            'email' => 'mahadulhasan05@gmail.com',
            'user_name' => 'admin',
            'password' => bcrypt('123456'),
            'gender' => 'male',
            'user_type' => 'admin',
        ]);
    }
}
