<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('levels')->delete();
        
        \DB::table('levels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Kabupaten / Kota',
                'created_at' => '2021-10-09 06:59:27',
                'updated_at' => '2021-10-09 06:59:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Kecamatan',
                'created_at' => '2021-10-09 07:03:03',
                'updated_at' => '2021-10-11 01:52:52',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Kelurahan/Desa',
                'created_at' => '2021-10-11 01:53:54',
                'updated_at' => '2021-10-11 01:53:54',
            ),
        ));
        
        
    }
}