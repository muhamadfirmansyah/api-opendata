<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('areas')->delete();

        DB::table('areas')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Kabupaten Bogor',
                'level_id' => 1,
                'code' => '32.01',
                'latitude' => -6.595038,
                'longitude' => 106.816635,
                'created_at' => '2021-10-09 07:33:40',
                'updated_at' => '2021-10-09 08:57:09',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Kabupaten Sukabumi',
                'level_id' => 1,
                'code' => '32.02',
                'latitude' => -6.923700,
                'longitude' => 106.928726,
                'created_at' => '2021-10-09 07:35:05',
                'updated_at' => '2021-10-09 08:57:20',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Kecamatan Ciawi',
                'level_id' => 2,
                'code' => '32.01.24',
                'latitude' => -6.923700,
                'longitude' => 106.928726,
                'created_at' => '2021-10-09 07:35:05',
                'updated_at' => '2021-10-09 08:57:20',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Kecamatan Cicurug',
                'level_id' => 2,
                'code' => '32.02.16',
                'latitude' => -6.923700,
                'longitude' => 106.928726,
                'created_at' => '2021-10-09 07:35:05',
                'updated_at' => '2021-10-09 08:57:20',
            ),
        ));
    }
}
