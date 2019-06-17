<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function Discussion() {
    return $this->belongsTo('App\Discussion');
    }
    public function user() {
        return $this->belongsTo('App\User');
        }

        public function likes() {
            return $this->hasMany('App\Like');
        }
        public function comment() {
            return $this->hasMany('App\Comments');
        }
}
