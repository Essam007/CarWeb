<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table='comments';
    protected $fillable = ['body','user_id'];
    public $timestamp = true;

    public function users()
    {
        return $this->belongsTo(User::class ,'user_id');
    }
}
