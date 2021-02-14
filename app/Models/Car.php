<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table ='cars';
    protected $fillable = ['name','model','price','details','created_at','updated_at'];
    protected $hidden = ['created_at','updated_at'];
    public $timestamp = false;
}