<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peran extends Model
{
    Protected $table='peran';
    public function pengguna(){
    	return $this ->belongsToMany(pengguna::class);
    }
}
