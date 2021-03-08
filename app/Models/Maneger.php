<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maneger extends Model
{
    protected $table ='manegers';
    protected $fillable = ['name','bransh_id'];
    public $timestamp = true;

    public function branshs()
    {
        return $this->belongsTo(Bransh::class , 'bransh_id');
    }
}
