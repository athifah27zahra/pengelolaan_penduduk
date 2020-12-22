<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index(){
        $data_penduduk = \App\Models\Penduduk::all();
        return view('penduduk.index', ['data_penduduk' => $data_penduduk]);
        // $data_penduduk = \App\Models\Penduduk::all();
        // return view('penduduk.index', compact('data_penduduk'));
    }

    public function create()
    {
        $pekerjaan = \App\Models\Pekerjaan::pluck('nama', 'id');
        $level_pendidikan = \App\Models\LevelPendidikan::pluck('nama', 'id');
        $kewarganegaraan = \App\Models\Kewarganegaraan::pluck('nama', 'id')
        ->first();
        return view('penduduk.create', compact('pekerjaan', 'level_pendidikan', 'kewarganegaraan'));
    }

    public function store(Request $request){
    //     $request->validate([
    //         'penduduk_id' => 'required'
    //    ]);

        $pendudukk= new Penduduk();
        $pendudukk->id = $request->input('id');
        $pendudukk->nama = $request->input('nama');
        $pendudukk->nik = $request->input('nik');
        $pendudukk->tempat_lahir = $request->input('tempat_lahir');
        $pendudukk->tanggal_lahir = $request->input('tanggal_lahir');
        $pendudukk->agama = $request->input('agama');
        $pendudukk->jenis_kelamin = $request->input('jenis_kelamin');
        $pendudukk->level_pendidikan = $request->input('level_pendidikan');
        $pendudukk->pekerjaan = $request->input('pekerjaan');
        $pendudukk->status_pernikahan = $request->input('status_pernikahan');
        $pendudukk->status_keluarga = $request->input('status_keluarga');
        $pendudukk->kewarganegaraan = $request->input('kewarganegaraan');
        $pendudukk->ayah = $request->input('ayah');
        $pendudukk->ibu = $request->input('ibu');

        $pendudukk->save();
        return view('penduduk.index');
    }
    
}
