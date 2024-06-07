<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mastersite')->insert([
            ['name' => 'Office Lantai 1',],
            ['name' => 'Office Lantai 2',],
            ['name' => 'Plant',],
            ['name' => 'Plant - Office',],
        ]);
    }
}
