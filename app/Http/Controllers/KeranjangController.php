<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('keranjangbelanja.index', compact('keranjangbelanja'));
    }

    public function create()
    {
        return view('keranjangbelanja.create');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect()->route('keranjangbelanja.index')->with('success', 'Data belanja berhasil ditambahkan di keranjang.');
    }

    public function edit($ID)
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->where('ID', $ID)->first();

        if (!$keranjangbelanja) {
            abort(404);
        }

        return view('keranjangbelanja.edit', compact('keranjangbelanja'));
    }

    public function update(Request $request, $ID)
    {

        DB::table('keranjangbelanja')
            ->where('ID', $ID)
            ->update([
                'KodeBarang' => $request->KodeBarang,
                'Jumlah' => $request->Jumlah,
                'Harga' => $request->Harga,
            ]);

        return redirect()->route('keranjangbelanja.index')->with('success', 'Data keranjang belanja berhasil diubah.');
    }

    public function destroy($ID)
    {
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        return redirect()->route('keranjangbelanja.index')->with('success', 'Data keranjang belanja berhasil dihapus.');
    }
}
