<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterAssetStatus extends Model
{
    use HasFactory;

    protected $table = 'masterstatus';
    protected $fillable = [
        'status',
    ];
}
