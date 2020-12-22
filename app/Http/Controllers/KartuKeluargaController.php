<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Jorong;
use App\Models\KartuKeluarga;


class KartuKeluargaController extends Controller
{
    public function index(){
        $keluarga = KartuKeluarga::withCount('penduduks')->paginate(10);
        $jorong = Jorong::get();
        return view('keluarga.index', compact('keluarga', 'jorong'));
    }
    public function show(KartuKeluarga $keluarga){
        $penduduks = Penduduk::where('keluarga_id', $keluarga->id)->get();
        return view('keluarga.show', compact('penduduks'));
    }

    public function edit($id){
        $keluarga= KartuKeluarga::find($id);
        $jorong = Jorong::get();
        return view('keluarga.edit', compact('keluarga','jorong'));
    }

    public function update(Request $request){
        $updatee = KartuKeluarga::find($request->id);
        $updatee->no=$request->no;
        $updatee->jorong_id = $request->jorong;
        $updatee->tanggal_pencatatan = $request->tanggal_pencatatan;
        
        $updatee->save();
        return back('keluarga.index');
    }

    public function create(KartuKeluarga $keluarga){
        $pekerjaan = \App\Models\Pekerjaan::pluck('nama', 'id');
        $level_pendidikan = \App\Models\LevelPendidikan::pluck('nama', 'id');
        $kewarganegaraan = \App\Models\Kewarganegaraan::pluck('nama', 'id');

        return view('keluarga.tambah', compact('pekerjaan', 'level_pendidikan', 'kewarganegaraan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'keluarga_id' => 'required'
       ]);

        $family= new KartuKeluarga();
        $family-> id = $request->input('id');
        $family->keluarga_id = $request->input('keluarga_id');
        $family->nama = $request->input('nama');
        $family->nik = $request->input('nik');
        $family->tempat_lahir = $request->input('tempat_lahir');
        $family->tanggal_lahir = $request->input('tanggal_lahir');
        $family->agama = $request->input('agama');
        $family->jenis_kelamin = $request->input('jenis_kelamin');
        $family->level_pendidikan_id = $request->input('level_pendidikan_id');
        $family->pekerjaan_id = $request->input('pekerjaan_id');
        $family->kewarganegaraan_id = $request->input('kewarganegaraan_id');
        $family->pekerjaan = $request->input('pekerjaan');
        $family->status_pernikahan = $request->input('status_pernikahan');
        $family->status_keluarga = $request->input('status_keluarga');
        $family->kewarganegaraan = $request->input('kewarganegaraan');
        $family->ayah = $request->input('ayah');
        $family->ibu = $request->input('ibu');

        $family->save();
        session()->flash('flash_success', 'Berhasil menambahkan Progress!');

        return view('backend.ta.index');
    }

    public function delete($id){
        KartuKeluarga::where('id',$id)->delete();
        return  back()->with('post_delete','data berhasil dihapus');
        
    }
}
