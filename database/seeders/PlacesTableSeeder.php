<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('places')->delete();
        
        \DB::table('places')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Kantor Pemerintahan Kabupaten Sukabumi',
                'category_id' => 1,
                'city_id' => 2,
                'district_id' => 4,
                'latitude' => '-6.9237000',
                'longitude' => '106.9287260',
                'created_at' => '2021-10-09 08:59:25',
                'updated_at' => '2021-10-09 09:00:27',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Siloam Hospitals ASRI',
                'category_id' => 3,
                'city_id' => 9,
                'district_id' => 10,
                'latitude' => '-6.2545094',
                'longitude' => '106.8322856',
                'created_at' => '2021-10-10 15:07:18',
                'updated_at' => '2021-10-10 15:07:18',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'RSCM Kencana',
                'category_id' => 3,
                'city_id' => 11,
                'district_id' => 12,
                'latitude' => '-6.1986830',
                'longitude' => '106.8458027',
                'created_at' => '2021-10-10 15:13:39',
                'updated_at' => '2021-10-10 15:13:39',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Tangkubanperahu Jami Mosque',
                'category_id' => 9,
                'city_id' => 13,
                'district_id' => 14,
                'latitude' => '-6.2072940',
                'longitude' => '106.8345991',
                'created_at' => '2021-10-10 15:28:54',
                'updated_at' => '2021-10-10 15:28:54',
            ),
            4 => 
            array (
                'id' => 7,
            'name' => 'Gedung KPK (Gedung Merah Putih)',
                'category_id' => 1,
                'city_id' => 13,
                'district_id' => 14,
                'latitude' => '-6.2076811',
                'longitude' => '106.8307299',
                'created_at' => '2021-10-10 15:29:55',
                'updated_at' => '2021-10-10 15:29:55',
            ),
            5 => 
            array (
                'id' => 1,
                'name' => 'Kantor Pemerintahan Kabupaten Bogor',
                'category_id' => 1,
                'city_id' => 1,
                'district_id' => 3,
                'latitude' => '-6.5950380',
                'longitude' => '106.8166350',
                'created_at' => '2021-10-09 08:52:31',
                'updated_at' => '2021-10-10 23:04:14',
            ),
        ));
        
        
    }
}