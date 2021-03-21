<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maneger extends Model
{
    protected $table ='manegers';
    protected $fillable = ['name'];
    public $timestamp = true;

    public function employes()
    {
        return $this->belongsTo(Employee::class ,'maneger_id');
    }

}
