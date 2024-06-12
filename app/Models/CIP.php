<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CIP extends Model
{
    use HasFactory;

    protected $table = 'cip';
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
        'statusRequest',
        'statusConfirmation',
        'outstandingStatus',
        'user',
        'ongoingStatus',
        'notes'
        

    ];
}
