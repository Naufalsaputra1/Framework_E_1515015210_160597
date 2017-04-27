<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Pengguna extends Model implements AuthenticatableContract {
    use Authenticatable;
    // , Authorizable, CanResetPasswordContract;
    protected $table ='pengguna'; //menghubungkan table pengguna didatabase
    protected $fillable =['username', 'password']; //fillable yang boleh diisi

    public function mahasiswa(){
    	return $this->hasOne(mahasiswa::class); //memanggil kelas mahasiswa didalam tabel pengguna
    }
   
    public function dosenn()
    {
    	return $this->hasOne(dosenn::class);
    }

     public function peran()
    {
    	return $this->belongsToMany(Peran::class);
    }
}

