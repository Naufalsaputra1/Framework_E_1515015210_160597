<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosenn extends Model
{
    protected $table='dosenn';
    protected $guarded = ['id'];

    public function Pengguna(){
    	return $this->belongsTo(Pengguna::class);
    }
    public function dosen_matakuliah()
    {
    	return $this->hasMany(dosen_matakuliah::class,'Dosen_id');
    }
    public function listDosenDanNIP()
   {
      $out = [];
      foreach ($this->all() as $dsn) {
         $out[$dsn->id] = "{$dsn->Nama} ({$dsn->NIP})";
      }
      return $out;
   }
}
