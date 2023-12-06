<?php
 
 namespace App\Models;
  
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
  
 class Record extends Model
 {
     use HasFactory;
     protected $fillable = [
         'uid',
         'kid',
         'name',
         'lend_date',
         'lend_time',
         'back_date',
         'back_time',
     ];
    public function key()
    {
        return $this->belongsTo('App\Models\Key', 'kid', 'id');
    }
    public function username()
    {
        return $this->belongsTo('App\Models\Username','uid','id');
    }
 }
  