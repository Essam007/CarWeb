<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bransh extends Model
{
    protected $table ='branshs';
    protected $fillable = ['name','adress','city_id'];
    public $timestamp = true ;

    public function citis()
    {
        return $this->hasMany(City::class ,'city_id');
    }

}
