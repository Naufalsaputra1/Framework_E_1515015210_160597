<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosenn;
use App\Pengguna;
use App\Http\Requests\DosenRequest;

class dosenController extends Controller
{
  protected $informasi = 'Gagal Melakukan Aksi';
  public function awal()
  {
    $semuaDosen = Dosenn::all();
    return view('dosenn.awal', compact('semuaDosen'));
  }
    public function tambah()
    {
        return view('dosenn.tambah');
         }
  public function simpan(DosenRequest $input)
  {
    $pengguna = new Pengguna($input->only('username','password'));
      if ($pengguna->save())
      {
        $dosenn = new dosenn;
        $dosenn->Nama = $input->Nama;
        $dosenn->NIP = $input->NIP;
        $dosenn->Alamat = $input->Alamat;
          if ($pengguna->dosenn()->save($dosenn)) $this->informasi = 'Berhasil simpan data';
    }
      return redirect('dosenn')->with(['informasi' => $this->informasi]);
    }
    public function edit($id){
      $dosenn = dosenn::find($id);
      return view('dosenn.edit')->with(array('dosenn' => $dosenn));
    }
    public function lihat($id){
      $dosenn = dosenn::find($id);
      return view('dosenn.lihat')->with(array('dosenn' => $dosenn));
    }
    public function update($id, DosenRequest $input){
      $dosenn = dosenn::find($id);
      $dosenn->Nama = $input->Nama;
      $dosenn->NIP = $input->NIP;
      $dosenn->Alamat = $input->Alamat;
      $dosenn->save();
      
        if (!is_null($input->username))
        {
          $pengguna = $dosenn->pengguna->fill($input->only('username'));
          if (!empty($input->password)) $pengguna->password = $input->password;
          if ($pengguna->save()) $this->informasi = 'Berhasil simpan data';
        }
        else
        {
          $this->informasi = 'Berhasil simpan data';
        }
        
        return redirect('dosenn')->with(['informasi' => $this->informasi]);
      }
      public function hapus($id) {
        $dosenn = dosenn::find($id);
        if ($dosenn->pengguna()->delete())
        {
          if ($dosenn->delete()) $this->informasi = 'Berhasil hapus data';
        }
        return redirect('dosenn')->with(['informasi' => $this->informasi]);
        }
  
}