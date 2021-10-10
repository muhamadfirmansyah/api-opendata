<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('levels')->delete();

        DB::table('levels')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Kabupaten / Kota',
                'created_at' => '2021-10-09 06:59:27',
                'updated_at' => '2021-10-09 06:59:27',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Kelurahan / Desa',
                'created_at' => '2021-10-09 07:03:03',
                'updated_at' => '2021-10-09 07:03:03',
            )
        ));
    }
}
