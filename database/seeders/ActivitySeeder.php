<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
                'activity_reward_point' => 15,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')

            ],
            [
                'activity_title' => 'Tulis Artikel',
                'activity_description' => 'Tulis artikel dan dapatkan 10 poin',
                'activity_reward_point' => 10,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'activity_title' => 'Komentari Artikel',
                'activity_description' => 'Komentari artikel dan dapatkan 1 poin',
                'activity_reward_point' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'activity_title' => 'Lengkapi Profil',
                'activity_description' => 'Lengkapi profil dan dapatkan 5 poin',
                'activity_reward_point' => 5,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'activity_title' => 'Klaim Reward',
                'activity_description' => 'Klaim reward dan dapatkan 7 poin',
                'activity_reward_point' => 7,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];
        DB::table('activities')->insert($data);
    }
}
