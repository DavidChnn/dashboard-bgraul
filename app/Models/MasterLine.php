<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterLine extends Model
{
    use HasFactory;

    protected $table = 'masterline';
    protected $fillable = [
        'line',
        'images',
    ];
}
