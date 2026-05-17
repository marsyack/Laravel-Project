<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignSeeder extends Seeder
{
    public function run()
    {
        DB::table('campaigns')->insert([
            'title' => 'Donasi Banjir',
            'description' => 'Bantu korban banjir',
            'target_donation' => 1000000,
            'collected_donation' => 0,
            'deadline' => '2026-12-31',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}