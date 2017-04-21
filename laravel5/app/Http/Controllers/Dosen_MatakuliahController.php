<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen_matakuliah;

use App\dosenn;

use App\matakuliah;
use App\Http\Requests\DosenMatakuliahRequest;

class dosen_matakuliahController extends Controller
{

   protected $informasi = 'Gagal melakukan aksi';

   public function awal(){
      $semuaJadwalDosenMengajar = dosen_matakuliah::all();
      return view('dosen_matakuliah.awal', compact('semuaJadwalDosenMengajar'));
   }
   public function tambah(){
      $dosen = new dosenn;
      $matakuliah = new matakuliah;
      return view('dosen_matakuliah.tambah', compact('dosen','matakuliah'));
   }
   public function simpan(DosenMatakuliahRequest $input){
      $dosen_matakuliah = new dosen_matakuliah($input->only('Dosen_id','Matakuliah_id'));
      if ($dosen_matakuliah->save()) $this->informasi = "Jadwal Dosen Mengajar Berhasil Disimpan";
      return redirect('dosen_matakuliah')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id){
      $dosen_matakuliah = dosen_matakuliah::find($id);
      return view('dosen_matakuliah.lihat',compact('dosen_matakuliah'));
   }
   public function edit($id){
      $dosen_matakuliah = dosen_matakuliah::find($id);
      $dosen = new dosenn;
      $matakuliah = new matakuliah;
      return view('dosen_matakuliah.edit',compact('dosen','matakuliah','dosen_matakuliah'));
   }
   public function update($id, DosenMatakuliahRequest $input){
      $dosen_matakuliah = dosen_matakuliah::find($id);
      $dosen_matakuliah->fill($input->only('Dosen_id','Matakuliah_id'));
      if($dosen_matakuliah->save()) $this->informasi = "Jadwal Dosen Mengajar berhasil diperbarui";
      return redirect('dosen_matakuliah')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id,Request $input) {
      $dosen_matakuliah = dosen_matakuliah::find($id);
      if($dosen_matakuliah->delete()) $this->informasi = "Jadwal Dosen Mengajar berhasil dihapus ";
      return redirect('dosen_matakuliah')->with(['informasi' => $this->informasi]);
   }
}
