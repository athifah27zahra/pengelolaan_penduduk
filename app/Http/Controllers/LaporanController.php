<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index(){
        $nagari = Nagari::all();

        return view('pendidikan.index', compact('nagari'));
    }

    public function produktif(){
        $penduduks = Penduduk::produktif()->paginate(10);
        $penduduk = Penduduk::produktif()->get();
        $count = 0;
        foreach ($penduduk as $pendudukk){
            $pendudukk;
            $count++;
        }

        return view('laporan.index', compact('pendudukk', 'count'));
    }

    public function pendidikan(){
        $pendidikan = Penduduk::where('level_pendidikan_id', 1)->orWhere('level_pendidikan_id', 2)->orWhere('level_pendidikan_id', 3)->paginate(10);
        $pendidikans = Penduduk::where('level_pendidikan_id', 1)->orWhere('level_pendidikan_id', 2)->orWhere('level_pendidikan_id', 3)->get();
        $count = 0;

        foreach ($pendidikans as $tes){
            $tes;
            $count++;
        }

        return view('pendidikan.index', compact('pendidikan', 'count'));
    }
}
