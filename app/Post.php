<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ // A post can belong to a user
    public function user(){
        return $this-> belongsTo('App\User');
    }
}
