<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Matakuliah;
use App\mahasiswa;
use App\dosen_matakuliah;
use App\ruangan;

class JadwalMatakuliahController extends Controller
{
    protected $informasi ='Gagal melakukan aksi';

    public function awal(){
        $semuaJadwalMatakuliah = Jadwal_Matakuliah::all();
        return view('jadwal_matakuliah.awal',compact('semuaJadwalMatakuliah'));
    }
public function tambah(){
    $mahasiswa = new mahasiswa;
    $ruangan = new ruangan;
    $dosen_matakuliah = new dosen_matakuliah;
    return view('jadwal_matakuliah.tambah',compact('mahasiswa','ruangan','dosen_matakuliah'));
    }

public function simpan(Request $input){
    $jadwal_matakuliah= new jadwal_matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if ($jadwal_matakuliah->save()) $this->informasi = 'Berhasil Simpan Jadwal Mahasiswa ';
        return redirect('jadwal_matakuliah')->with(['informasi'=>$this->informasi]);
}

public function edit($id){
    $jadwal_matakuliah = jadwal_matakuliah::find($id);
    $mahasiswa = new mahasiswa;
    $ruangan = new ruangan;
    $dosen_matakuliah = new dosen_matakuliah;
    return view('jadwal_matakuliah.edit',compact('mahasiswa','ruangan','dosen_matakuliah','jadwal_matakuliah'));
    }

public function lihat($id){
    $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
    return view('jadwal_matakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_Matakuliah));
}

public function update($id, Request $input){
    $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
    $jadwal_matakuliah->mahasiswa_id = $input->mahasiswa_id;
    $jadwal_matakuliah->ruangan_id = $input->ruangan_id;
    $jadwal_matakuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
    $informasi = $jadwal_matakuliah->save() ? 'Berhasil update data' : 'Gagal update data';
    return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
}

public function hapus($id){
    $jadwal_matakuliah = Jadwal_Matakuliah::find($id);
    $informasi = $jadwal_matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
    return redirect('jadwal_matakuliah')->with(['informasi'=>$informasi]);
}
}
