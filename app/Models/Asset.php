<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $table = 'asset';
    protected $fillable = [
        'assetCodeAccounting',
        'assetCodeEnginery' ,
        'assetClass',
        'assetCategory',
        'assetGroup' ,
        'assetDescription' ,
        'subAsset' ,
        'picAsset' ,
        'cipCode' ,
        'acquisitionCIP' ,
        'depreciationStart' ,
        'depreciationEnd' ,
        'currentBookValue' ,
        'assetCondition' ,
        'assetStatus' ,
        'costCenter' ,
        'product' ,
        'inventoryNumber',
        'department' ,
        'vendor' ,
        'site' ,
        'line' ,
        'proccess' ,
        'quantity',
        'uom' ,
        'acquisitionValue' ,
        'cipNumber',
        'budgetNumber' ,
        'poNumber' ,
        'assetPicture',
        'departmentDetail',
        'user'

    ];
}
