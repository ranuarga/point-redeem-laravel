<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RewardSeeder extends Seeder
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
                'reward_title' => 'Pulsa 5K',
                'reward_description' => 'Tukarkan 50 poin untuk dapatkan pulsa 5K',
                'reward_cost' => 50
            ],
            [
                'reward_title' => 'Pulsa 10K',
                'reward_description' => 'Tukarkan 100 poin untuk dapatkan pulsa 10K',
                'reward_cost' => 100
            ],
            [
                'reward_title' => 'Gantungan Kunci',
                'reward_description' => 'Tukarkan 150 poin untuk dapatkan gantungan kunci limited edition',
                'reward_cost' => 150
            ]
        ];
        DB::table('rewards')->insert($data);
    }
}
