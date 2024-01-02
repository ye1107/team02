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
    public function scopeBorrow($query,$start,$end)
    {
        return $query->whereBetween('lend_date',[$start,$end]);
    }
    public function scopeAllKids($query)
    {
        return $query->select('kid')->groupBy('kid');
    }
    public function scopeKey($query,$lock)
    {
        return $query->where('kid','=',$lock);
    }
 }
