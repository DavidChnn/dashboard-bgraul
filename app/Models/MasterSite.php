<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterSite extends Model
{
    use HasFactory;

    protected $table = 'mastersite';
    protected $fillable = [
        'name',
    ];
}
