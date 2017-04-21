<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
   protected $table = 'dosen_matakuliah';
   protected $guarded = ['id'];


    public function dosenn(){
      return $this->belongsTo(dosenn::class,'Dosen_id');
    }

   public function matakuliah()
   {
      return $this->belongsTo(matakuliah::class,'Matakuliah_id');
   }

    public function jadwal_matakuliah()
    {
       return $this->hasMany(jadwal_matakuliah::class);
    }

    public function listDosenDanMatakuliah(){
      $out=[];
       foreach ($this ->all() as $dsnMtk) {
           $out[$dsnMtk->id]="{$dsnMtk->dosenn->Nama} (matakuliah{$dsnMtk->matakuliah->Title})";
       }
       return $out;
      }


}