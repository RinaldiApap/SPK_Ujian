<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ControllerMahasiswa extends Controller
{
        public function show_home(){
        $aturan = DB::table('tbl_pengaturan_ujian')->get();
        // return "cek";
        return view('Mahasiswa.home',compact('aturan'));
    }

        public function show_ujian(){
        // return "cek";
        $soal = DB::table('tbl_soal')->get();
        
        // ddd($users);
        return view('Mahasiswa.ujian', compact('soal'));
    }

    public function hasil_ujian(Request $request){
        // return "cek";
        // return view('Mahasiswa.home');
        // ddd ($request->all());
        
        
    }
}
