<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table ='citys';
    protected $fillable = ['name'];
    public $timestamp = true;

    public function branshes()
    {
        return $this->hasMany(Bransh::class ,'city_id');
    }

}
