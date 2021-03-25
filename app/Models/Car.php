<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table ='cars';
    protected $fillable = ['name','model','photo','price','details'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamp = false;

    public static function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', '%' .$search. '%');
    }
}
