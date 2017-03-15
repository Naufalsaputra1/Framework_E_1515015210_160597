<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    Protected $table = 'pengguna';
    Protected $fillable = ['username','password'];
}
