<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('masteruom')->insert([
            ['name' => 'Pcs', 'detail' => 'Pieces' ],
            ['name' => 'ea', 'detail' => 'Each' ],
            ['name' => 'Lot', 'detail' => 'Lot' ],
            ['name' => 'Unit', 'detail' => 'Unit' ],
        ]);
    }
}
