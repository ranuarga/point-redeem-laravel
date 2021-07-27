<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'activity_title' => 'Register',
                'activity_description' => 'Register di aplikasi dan dapatkan 15 poin',
                'reward_point' => 15
            ],
            [
                'activity_title' => 'Tulis Artikel',
                'activity_description' => 'Tulis artikel dan mendapatkan 10 poin',
                'reward_point' => 10
            ],
            [
                'activity_title' => 'Komentari Artikel',
                'activity_description' => 'Komentari artikel dan dapatkan 1 poin',
                'reward_point' => 1
            ],
            [
                'activity_title' => 'Lengkapi Profil',
                'activity_description' => 'Lengkapi profil dan dapatkan 5 poin',
                'reward_point' => 5
            ],
            [
                'activity_title' => 'Klaim Reward',
                'activity_description' => 'Klaim reward dan dapatkan 7 poin',
                'reward_point' => 7
            ],
        ];
        DB::table('activities')->insert($data);
    }
}
