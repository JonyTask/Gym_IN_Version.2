<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GymsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'Gym_setting'=>'ブルーフィットネス24船橋',
            'prefecture'=>'千葉県',
            'city'=>'船橋市',
        ];
        DB::table('Gyms')->insert($param);

        $param = [
            'Gym_setting'=>'ゴールドジム南船橋千葉',
            'prefecture'=>'千葉県',
            'city'=>'船橋市',
        ];
        DB::table('Gyms')->insert($param);

        $param = [
            'Gym_setting'=>'エニタイムフィットネス船橋日大前店',
            'prefecture'=>'千葉県',
            'city'=>'船橋市',
        ];
        DB::table('Gyms')->insert($param);

        $param = [
            'Gym_setting'=>'エニタイムフィットネス船橋二和東店',
            'prefecture'=>'千葉県',
            'city'=>'船橋市',
        ];
        DB::table('Gyms')->insert($param);

        $param = [
            'Gym_setting'=>'カーブス夏見台',
            'prefecture'=>'千葉県',
            'city'=>'船橋市',
        ];
        DB::table('Gyms')->insert($param);

        $param = [
            'Gym_setting'=>'ブルーフィットネス24松戸',
            'prefecture'=>'千葉県',
            'city'=>'松戸市',
        ];
        DB::table('Gyms')->insert($param);

        $param = [
            'Gym_setting'=>'ワールドプラスジム松戸店',
            'prefecture'=>'千葉県',
            'city'=>'松戸市',
        ];
        DB::table('Gyms')->insert($param);

        $param = [
            'Gym_setting'=>'エニタイムフィットネス松戸駅前店',
            'prefecture'=>'千葉県',
            'city'=>'松戸市',
        ];
        DB::table('Gyms')->insert($param);

        $param = [
            'Gym_setting'=>'RIZAP松戸店',
            'prefecture'=>'千葉県',
            'city'=>'松戸市',
        ];
        DB::table('Gyms')->insert($param);

        $param = [
            'Gym_setting'=>'エニタイムフィットネス新松戸7丁目店',
            'prefecture'=>'千葉県',
            'city'=>'松戸市',
        ];
        DB::table('Gyms')->insert($param);
    }
}
