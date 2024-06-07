<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('master_asset_category')->insert([
            [
                'assetCategory' => 'Buildings and Structure',
                'assetClass' => 1000,
                'assetGroup' => 'Land',
                'depreciationCom' => 0,
                'depreciationFis' => 0,
            ],
            [
                'assetCategory' => 'Buildings and Structure',
                'assetClass' => 2000,
                'assetGroup' => 'Building',
                'depreciationCom' => 240,
                'depreciationFis' => 240,
            ],
            [
                'assetCategory' => 'Property and Investment',
                'assetClass' => 2100,
                'assetGroup' => 'Property and Investment',
                'depreciationCom' => 0,
                'depreciationFis' => 0,
            ],
            [
                'assetCategory' => 'Machinery and Equipment',
                'assetClass' => 3000,
                'assetGroup' => 'Machine1',
                'depreciationCom' => 84,
                'depreciationFis' => 84,
            ],
            [
                'assetCategory' => 'Machinery and Equipment',
                'assetClass' => 3000,
                'assetGroup' => 'Machine2',
                'depreciationCom' => 120,
                'depreciationFis' => 120,
            ],
            [
                'assetCategory' => 'Machinery and Equipment',
                'assetClass' => 3100,
                'assetGroup' => 'Machine Accessories',
                'depreciationCom' => 48,
                'depreciationFis' => 48,
            ],
            [
                'assetCategory' => 'Vehicle',
                'assetClass' => 4000,
                'assetGroup' => 'Vehicle',
                'depreciationCom' => 48,
                'depreciationFis' => 48,
            ],
            [
                'assetCategory' => 'Office Equipment and Furniture',
                'assetClass' => 5000,
                'assetGroup' => 'Office Equipment',
                'depreciationCom' => 48,
                'depreciationFis' => 48,
            ],
            [
                'assetCategory' => 'Office Equipment and Furniture',
                'assetClass' => 6000,
                'assetGroup' => 'Furniture',
                'depreciationCom' => 48,
                'depreciationFis' => 48,
            ],
            [
                'assetCategory' => 'CIP',
                'assetClass' => 7000,
                'assetGroup' => 'CIP',
                'depreciationCom' => 0,
                'depreciationFis' => 0,
            ],
            [
                'assetCategory' => 'Land Right',
                'assetClass' => 7500,
                'assetGroup' => 'Land Right',
                'depreciationCom' => 300,
                'depreciationFis' => 300,
            ],
            [
                'assetCategory' => 'Diferred Charges',
                'assetClass' => 7600,
                'assetGroup' => 'Diferred Charges',
                'depreciationCom' => 48,
                'depreciationFis' => 48,
            ],
            [
                'assetCategory' => 'Low Value Asset',
                'assetClass' => 8000,
                'assetGroup' => 'LVA Plant',
                'depreciationCom' => 1,
                'depreciationFis' => 1,
            ],
            [
                'assetCategory' => 'Low Value Asset',
                'assetClass' => 9000,
                'assetGroup' => 'LVA Office',
                'depreciationCom' => 1,
                'depreciationFis' => 1,
            ]
        ]);
        
    }
}
