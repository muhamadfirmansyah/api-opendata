<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('places')->delete();

        DB::table('places')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Kantor Pemerintahan Kabupaten Bogor',
                'category_id' => 1,
                'city_id' => 1,
                'district_id' => 3,
                'latitude' => -6.595038,
                'longitude' => 106.816635,
                'created_at' => '2021-10-09 08:52:31',
                'updated_at' => '2021-10-09 08:52:31',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Kantor Pemerintahan Kabupaten Sukabumi',
                'category_id' => 1,
                'city_id' => 2,
                'district_id' => 4,
                'latitude' => -6.923700,
                'longitude' => 106.928726,
                'created_at' => '2021-10-09 08:59:25',
                'updated_at' => '2021-10-09 09:00:27',
            ),
        ));
    }
}
