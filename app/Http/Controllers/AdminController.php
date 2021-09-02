<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Soal;
use App\Models\Kategori;

class AdminController extends Controller
{
    public function show_home(){
        // return "cek";
        return view('Admin.home');
    }

    public function show_dataUser(){
        // return "cek";
        return view('Admin.dataUser');
    }

    public function show_tambahSoal(){
        // return "cek";
        $kategori = Kategori::all();
        // return $kategori;
        return view('Admin.tambahSoal',compact('kategori'));
    }
    
    
    public function show_dataSoal(){
        $soal = DB::table('tbl_soal')
        ->join('tbl_kategori', 'tbl_soal.kategori', '=', 'tbl_kategori.id_kategori')
        ->select('tbl_soal.*', 'tbl_kategori.kategori')
        ->get();
        // return $soal;
        return view('Admin.dataSoal', compact('soal'));
    }

    public function add_pertanyaan(Request $request)
    {
        $save = Soal::insert([
            'soal' => $request->pertanyaan,
            'a' => $request->jawabanA,
            'b' => $request->jawabanB,
            'c' => $request->jawabanC,
            'd' => $request->jawabanD,
            'knc_jawaban' => $request->kunjaw,
            'gambar' => '',
            'tanggal' => date('Y-m-d'),
            'aktif' => $request->aktif,
            'kategori' => $request->kategori
        ]);
        return redirect('admin_dataSoal');

        
    }
}
