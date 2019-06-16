<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    public function Discussion() {
    return $this->belongsTo('App\Discussion');
    }
    public function user() {
        return $this->belongsTo('App\User');
        }
}
