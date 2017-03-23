<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ruangan;
use Input;
use Redirect;
use Informasi;

class ruangancontroller extends Controller
{
    public function awal(){
        return view('ruangan.awal',['data'=>ruangan::all()]);
    }
    public function tambah(){
        return view('ruangan.tambah');
    }
    public function simpan(Requests $input){
        $ruangan = new ruangan;
        $ruangan->id=$input->id;
        $ruangan->titlee=$input->title;
        $informasi = $ruangan->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $ruangan=ruangan::find($id);
        return view('ruangan.edit', compact('ruangan'));
    }
public function lihat($id){
        $ruangan=ruangan::find($id);
        return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
    }

    public function update($id, Request $input){
        $ruangan = ruangan::find($id);
        $input=array_except(Input::all(),'_method');
        $ruangan->update($input);

        return redirect::route('ruangan.tambah');
    }
    public function hapus($id){
        $ruangan = ruangan::find($id);
        $informasi = $ruangan->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }

    }