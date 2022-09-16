<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'code' => 'Administrator',
            'name' => 'Administrator'
        ]);

        DB::table('role')->insert([
            'code' => 'Subscriber',
            'name' => 'Subscriber'
        ]);
    }
}
