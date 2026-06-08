<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    // tampil data
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->paginate(10);
        return view('index_nilai', ['nilaikuliah' => $nilaikuliah]);
    }

    //form tambah
    public function tambah()
    {
        return view('tambahnilai');
    }

    // method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
            'nrp' => $request->nrp,
            'nilai_angka' => $request->nilai_angka,
            'sks' => $request->sks
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

	}
}
