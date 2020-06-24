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
        //
        DB::table('users')->insert(
            [
                'firstName' => 'admin' ,
                'lastName' => 'administrator' ,
                'name' => 'admin',
                'email' => 'admin@info.com',
                'phone' => '0122266973' ,
                'password' => bcrypt('admin123'),
                'permission' => '1' ,
            ]
        );
    }
}
