<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BolpenController extends Controller
{
    public function index()
    {
        $bolpen = DB::table('bolpen')->orderBy('KodeBolpen')->get();
        return view('bolpen.index', compact('bolpen'));
    }

    public function create()
    {
        return view('bolpen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MerkBolpen' => 'required|string|max:30',
            'StockBolpen' => 'required|integer',
            'Tersedia' => 'required|string',
        ]);

        DB::table('bolpen')->insert([
            'MerkBolpen' => $request->MerkBolpen,
            'StockBolpen' => $request->StockBolpen,
            'Tersedia' => $request->Tersedia,
        ]);

        return redirect()->route('bolpen.index')->with('success', 'Data bolpen berhasil ditambahkan.');
    }

    public function edit($KodeBolpen)
    {
        $bolpen = DB::table('bolpen')->where('KodeBolpen', $KodeBolpen)->first();

        if (!$bolpen) {
            abort(404);
        }

        return view('bolpen.edit', compact('bolpen'));
    }

    public function update(Request $request, $KodeBolpen)
    {
        $request->validate([
            'MerkBolpen' => [
                'required',
                'string',
                'max:30',
                Rule::unique('bolpen', 'KodeBolpen')->ignore($KodeBolpen, 'KodeBolpen'),
            ],
            'StockBolpen' => 'required|integer',
            'Tersedia' => 'required|string',
        ]);

        DB::table('bolpen')
            ->where('KodeBolpen', $KodeBolpen)
            ->update([
                'MerkBolpen' => $request->MerkBolpen,
                'StockBolpen' => $request->StockBolpen,
                'Tersedia' => $request->Tersedia,
            ]);

        return redirect()->route('bolpen.index')->with('success', 'Data bolpen berhasil diubah.');
    }

    public function destroy($KodeBolpen)
    {
        DB::table('bolpen')->where('KodeBolpen', $KodeBolpen)->delete();

        return redirect()->route('bolpen.index')->with('success', 'Data bolpen berhasil dihapus.');
    }
}
