<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('areas')->delete();
        
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Kabupaten Sukabumi',
                'level_id' => 1,
                'code' => '32.02',
                'latitude' => '-6.9237000',
                'longitude' => '106.9287260',
                'created_at' => '2021-10-09 07:35:05',
                'updated_at' => '2021-10-09 08:57:20',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Kecamatan Ciawi',
                'level_id' => 2,
                'code' => '32.01.24',
                'latitude' => '-6.9237000',
                'longitude' => '106.9287260',
                'created_at' => '2021-10-09 07:35:05',
                'updated_at' => '2021-10-09 08:57:20',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Kecamatan Cicurug',
                'level_id' => 2,
                'code' => '32.02.16',
                'latitude' => '-6.9237000',
                'longitude' => '106.9287260',
                'created_at' => '2021-10-09 07:35:05',
                'updated_at' => '2021-10-09 08:57:20',
            ),
            3 => 
            array (
                'id' => 9,
                'name' => 'Kota Jakarta Selatan',
                'level_id' => 1,
                'code' => '31.74',
                'latitude' => '-6.2605544',
                'longitude' => '106.8116893',
                'created_at' => '2021-10-10 14:45:21',
                'updated_at' => '2021-10-10 14:45:21',
            ),
            4 => 
            array (
                'id' => 10,
                'name' => 'Kecamatan Pancoran',
                'level_id' => 2,
                'code' => '31.74.08.1001',
                'latitude' => '-6.2529134',
                'longitude' => '106.8424397',
                'created_at' => '2021-10-10 14:49:36',
                'updated_at' => '2021-10-10 14:49:36',
            ),
            5 => 
            array (
                'id' => 11,
                'name' => 'Kota Jakarta Pusat',
                'level_id' => 1,
                'code' => '31.71',
                'latitude' => '-6.1731100',
                'longitude' => '106.8293610',
                'created_at' => '2021-10-10 15:10:22',
                'updated_at' => '2021-10-10 15:10:22',
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'Kecamatan Senen',
                'level_id' => 2,
                'code' => '31.71.04',
                'latitude' => '-6.1934560',
                'longitude' => '106.8502880',
                'created_at' => '2021-10-10 15:11:18',
                'updated_at' => '2021-10-10 15:11:18',
            ),
            7 => 
            array (
                'id' => 13,
                'name' => 'Kota Jakarta Selatan',
                'level_id' => 1,
                'code' => '31.74',
                'latitude' => '-6.3006410',
                'longitude' => '106.8140950',
                'created_at' => '2021-10-10 15:22:00',
                'updated_at' => '2021-10-10 15:22:00',
            ),
            8 => 
            array (
                'id' => 14,
                'name' => 'Kecamatan Setiabudi',
                'level_id' => 2,
                'code' => '31.74.02.1001',
                'latitude' => '-6.2135190',
                'longitude' => '106.8222660',
                'created_at' => '2021-10-10 15:24:32',
                'updated_at' => '2021-10-10 15:24:32',
            ),
            9 => 
            array (
                'id' => 1,
                'name' => 'Kabupaten Bogor',
                'level_id' => 1,
                'code' => '32.01',
                'latitude' => '-6.5950380',
                'longitude' => '106.8166350',
                'created_at' => '2021-10-09 07:33:40',
                'updated_at' => '2021-10-10 23:19:07',
            ),
        ));
        
        
    }
}