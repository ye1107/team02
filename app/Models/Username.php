<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Username extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'name',
        'photo',
    ];
    public function records()
    {
        return $this->hasMany('App\Models\Record','uid');
    }
    
}
