<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->delete();

        DB::table('categories')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Kantor Pemerintah Kabupaten/Kota',
                'created_at' => '2021-10-09 07:42:37',
                'updated_at' => '2021-10-09 07:43:10',
            ),
            1 =>
            array(
                'id' => 3,
                'name' => 'Rumah Sakit',
                'created_at' => '2021-10-09 09:24:14',
                'updated_at' => '2021-10-09 09:24:14',
            ),
            2 =>
            array(
                'id' => 4,
                'name' => 'Sekolah Menengah Atas',
                'created_at' => '2021-10-09 09:24:26',
                'updated_at' => '2021-10-09 09:24:26',
            ),
            3 =>
            array(
                'id' => 5,
                'name' => 'Puskesmas',
                'created_at' => '2021-10-09 09:24:33',
                'updated_at' => '2021-10-09 09:24:33',
            ),
            4 =>
            array(
                'id' => 6,
                'name' => 'Sekolah Menengah Pertama',
                'created_at' => '2021-10-09 09:24:42',
                'updated_at' => '2021-10-09 09:24:42',
            ),
            5 =>
            array(
                'id' => 7,
                'name' => 'Kantor Pemerintah Kecamatan',
                'created_at' => '2021-10-09 09:24:58',
                'updated_at' => '2021-10-09 09:24:58',
            ),
            6 =>
            array(
                'id' => 8,
                'name' => 'Sekolah Dasar',
                'created_at' => '2021-10-09 09:25:06',
                'updated_at' => '2021-10-09 09:25:06',
            ),
            7 =>
            array(
                'id' => 9,
                'name' => 'Tempat Ibadah',
                'created_at' => '2021-10-09 09:25:11',
                'updated_at' => '2021-10-09 09:25:11',
            ),
            8 =>
            array(
                'id' => 10,
                'name' => 'Kantor Pemerintah Kelurahan/Desa',
                'created_at' => '2021-10-09 09:25:26',
                'updated_at' => '2021-10-09 09:25:54',
            ),
        ));
    }
}
