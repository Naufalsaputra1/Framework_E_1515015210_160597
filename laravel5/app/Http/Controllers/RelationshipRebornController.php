<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosenn;

class RelationshipRebornController extends Controller
{
    public function ujiHas(){
    	return dosenn::has('dosen_matakuliah')->get();
    }

    public function ujiDoesntHave()
    {
    	return dosenn::doesntHave('dosen_matakuliah')->get();
    }
}
