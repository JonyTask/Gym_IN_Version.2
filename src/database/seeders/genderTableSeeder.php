<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class genderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'gender_name' => '男性',
        ];
        DB::table('gender')->insert($param);

        $param = [
            'gender_name' => '女性',
        ];
        DB::table('gender')->insert($param);

        $param = [
            'gender_name' => 'その他',
        ];
        DB::table('gender')->insert($param);

    }
}
