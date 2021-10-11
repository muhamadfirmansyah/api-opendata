<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@test.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l8.yE5M1izje4zR7do0/ieGRafKENJ2c1Qd8bvmOffOyCXEH1eJjq',
                'remember_token' => NULL,
                'created_at' => '2021-10-09 06:41:18',
                'updated_at' => '2021-10-09 06:41:18',
            ),
        ));
        
        
    }
}