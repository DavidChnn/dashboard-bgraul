<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAssetCategory extends Model
{
    use HasFactory;
    protected $table = 'master_asset_category';
    protected $fillable = [
        'assetClass',
        'assetGroup',
        'depreciationCom',
        'depreciationFis',

    ];
}
