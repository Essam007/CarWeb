<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table ='employees';
    protected $fillable = ['name','position','maneger_id'];
    public $timestamp = true;

    public function mangers()
    {
        return $this->belongsTo(Maneger::class ,'maneger_id');
    }
}
