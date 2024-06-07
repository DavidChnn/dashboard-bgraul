<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterCostCentre extends Model
{
    use HasFactory;

    protected $table = 'mastercostcentre';
    protected $fillable = [
        'name',
        'dept',
        'deptDetail'
    ];
}
