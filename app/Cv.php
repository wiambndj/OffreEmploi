<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    //
 
    public function user() {
    	return $this->belongsTo('App\User');
    }


    public function experiences() {
    	return $this->hasMany('App\Experience');
    }
<<<<<<< HEAD
    
=======
    public function job() {
    	return $this->hasMany('App\Job');
    }
>>>>>>> 00ba623784c1670fcf9ed4e4d70096915b0c2792
}
