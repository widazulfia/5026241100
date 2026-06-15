@extends('template')
@section('title', 'Data Siswa')
@section('konten')
    <center>
        <h2>Kode Soal tagihan_air</h2>
        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form Tambah Data Tagihan Air
            </div>

            <div class="card-body">
                <form action="{{ route('tagihan_air.store') }}" method="POST" onsubmit="return validasiForm()">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">No Meteran</label>
                        <div class="col-sm-2">
                            <input type="text" name="NoMeteran" id="NoMeteran" maxlength="6"
                                value="{{ old('NoMeteran') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Meter Awal</label>
                        <div class="col-sm-2">
                            <input type="text" name="MeterAwal" id="MeterAwal" value="{{ old('MeterAwal') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Meter Akhir</label>
                        <div class="col-sm-2">
                            <input type="text" name="MeterAkhir" id="MeterAkhir" value="{{ old('MeterAkhir') }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        </div>

        <br />
        <br />

        <a href="{{ route('tagihan_air.index') }}" class="btn btn-info">Kembali</a>

    </center>

    <script>
        function validasiForm() {
            let NoMeteran = document.getElementById('NoMeteran').value.trim();
            let MeterAwal = document.getElementById('MeterAwal').value.trim();
            let MeterAkhir = document.getElementById('MeterAkhir').value.trim();

            if (isNaN(MeterAwal)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter awal harus berupa angka.",
                    icon: "error"
                });
                return false;
            }

            if (isNaN(MeterAkhir)) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter akhir harus berupa angka.",
                    icon: "error"
                });
                return false;
            }
            MeterAkhir = parseInt(MeterAkhir);
            MeterAwal = parseInt(MeterAwal);

            if (MeterAkhir <= MeterAwal + 20) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter akhir terlalu kecil.",
                    icon: "error"
                });
                return false;
            }

            if (nama === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nama.length > 20) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama maksimal 20 karakter",
                    icon: "error"
                });
                return false;
            }

            if (kelas === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kelas wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (kelas.length > 5) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kelas maksimal 5 karakter",
                    icon: "error"
                });
                return false;
            }

            if (tanggal === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Tanggal lahir wajib diisi",
                    icon: "error"
                });
                return false;

            }

            return true;
        }
    </script>
@endsection
