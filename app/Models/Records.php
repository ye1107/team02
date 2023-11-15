<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    use HasFactory;
    protected $fillable = [
        'uid',
        'name',
        'lend_date',
        'lend_time',
        'back_date',
        'back_time',
    ];
}
