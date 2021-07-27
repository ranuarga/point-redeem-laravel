<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'admin_name' => 'Admin Point Redeem',
            'admin_email' => 'admin@point-redeem.id',
            'admin_password' => Hash::make('admin')
        ];
        DB::table('admins')->insert($data);
    }
}
