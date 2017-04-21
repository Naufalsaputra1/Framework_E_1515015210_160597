<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Matakuliah;
use App\Mahasiswa;
use App\Dosen_Matakuliah;
use App\Ruangan;
use App\Http\Requests\JadwalMatakuliahRequest;
class Jadwal_MatakuliahController extends Controller
{
 protected $guarded =['id'];
   
   protected $informasi = 'Gagal melakukan aksi';
  
   public function awal()
   {
    $semuaJadwalMatakuliah = jadwal_matakuliah::all();
      return view('jadwal_matakuliah.awal', compact('semuaJadwalMatakuliah'));
   }
   public function tambah()
   {
      $mahasiswa = new mahasiswa;
      $ruangan = new ruangan;
      $dosen_matakuliah = new dosen_matakuliah;
    return view('jadwal_matakuliah.tambah', compact('mahasiswa','ruangan','dosen_matakuliah'));
   }
   public function simpan(JadwalMatakuliahRequest $input)
   {
    $jadwal_matakuliah = new jadwal_matakuliah($input->only('Ruangan_id','Dosen_Matakuliah_id','Mahasiswa_id'));
    if($jadwal_matakuliah->save()) $this->informasi = "Jadwal mahasiswa berhasil disimpan ";
      return redirect('jadwal_matakuliah')->with(['informasi' => $this->informasi]);
   }
   public function lihat($id)
   {
      $jadwal_matakuliah = jadwal_matakuliah::find($id);
      return view('jadwal_matakuliah.lihat',compact('jadwal_matakuliah'));
   }
   public function edit($id)
   {
      $jadwal_matakuliah = jadwal_matakuliah::find($id);
      $mahasiswa = new mahasiswa;
      $ruangan = new ruangan;
      $dosen_matakuliah = new dosen_matakuliah;
      return view('jadwal_matakuliah.edit',compact('mahasiswa','ruangan','dosen_matakuliah','jadwal_matakuliah'));
   }
   public function update($id,JadwalMatakuliahRequest $input)
   {
      $jadwal_matakuliah = jadwal_matakuliah::find($id);
      $jadwal_matakuliah->fill($input->only('Ruangan_id','Dosen_Matakuliah_id','Mahasiswa_id'));
      if($jadwal_matakuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbarui";
      return redirect('jadwal_matakuliah')->with(['informasi' => $this->informasi]);
   }
   public function hapus($id,Request $input)
   {
      $jadwal_matakuliah = jadwal_matakuliah::find($id);
      if($jadwal_matakuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus ";
      return redirect('jadwal_matakuliah')->with(['informasi' => $this->informasi]);
   }
}
