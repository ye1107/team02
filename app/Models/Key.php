<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'room',
    ];
    public function records()
    {
        return $this->hasMany('App\Models\Record','kid');
    }
    
}
