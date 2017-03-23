<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\matakuliah;
use Input;
use Redirect;
use Informasi;

class matakuliahcontroller extends Controller
{
    public function awal(){
        return view('matakuliah.awal',['data'=>matakuliah::all()]);
    }
    public function tambah(){
        return view('matakuliah.tambah');
    }
    public function simpan(Requests $input){
        $matakuliah = new matakuliah;
        $matakuliah->id=$input->id;
        $ruangan->titlee=$input->title;
        $informasi = $matakuliah->save() ? 'berhasil input' : 'gagal simpan';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }

    public function edit($id){
        $matakuliah=matakuliah::find($id);
        return view('matakuliah.edit', compact('matakuliah'));
    }
public function lihat($id){
        $ruangan=ruangan::find($id);
        return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
    }

    public function update($id, Request $input){
        $matakuliah = matakuliah::find($id);
        $input=array_except(Input::all(),'_method');
        $matakuliah->update($input);

        return redirect::route('matakuliah.tambah');
    }
    public function hapus($id){
        $matakuliah = matakuliah::find($id);
        $informasi = $matakuliah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('matakuliah')->with(['informasi'=>$informasi]);
    }

    }