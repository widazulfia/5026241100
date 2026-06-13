@extends('template')
@section('title', 'Stok Bolpen Toko Nayla')
@section('konten')

    <h2>Tambah Data Bolpen</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('bolpen.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Merk Bolpen</label><br>
            <input type="text" name="MerkBolpen" id="MerkBolpen" maxlength="30" value="{{ old('MerkBolpen') }}">
        </p>

        <p>
            <label>Stock Bolpen</label><br>
            <input type="number" name="StockBolpen" id="StockBolpen" value="{{ old('StockBolpen') }}">
        </p>

        <p>
            <label>Tersedia</label><br>
            <input type="text" name="Tersedia" id="Tersedia" value="{{ old('Tersedia') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('bolpen.index') }}">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let MerkBolpen = document.getElementById('MerkBolpen').value.trim();
            let StockBolpen = document.getElementById('StockBolpen').value.trim();
            let Tersedia = document.getElementById('Tersedia').value.trim();

            if (MerkBolpen === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Merk bolpen wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (MerkBolpen.length > 30) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Merk bolpen maksimal 30 karakter",
                    icon: "error"
                });
                return false;
            }

            if (StockBolpen === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Stock bolpen wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (Tersedia === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Ketersediaan wajib diisi",
                    icon: "error"
                });
                return false;

            }

            return true;
        }
    </script>
@endsection
