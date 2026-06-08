@extends('template')

@section('title', 'Data Nilai Kuliah')

@section('konten')
<center>

    <br/>
    <br/>

    <h3>Data Nilai Kuliah</h3>

    <br/>

    <a href="/nilaikuliahtambah" class="btn btn-primary">+ Tambah Data</a>

    <br/>
    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @foreach($nilaikuliah as $n)
        @php
            if ($n->nilai_angka >= 80) {
                $huruf = 'A';
            } elseif ($n->nilai_angka >= 70) {
                $huruf = 'B';
            } elseif ($n->nilai_angka >= 60) {
                $huruf = 'C';
            } elseif ($n->nilai_angka >= 50) {
                $huruf = 'D';
            } else {
                $huruf = 'E';
            }

            $bobot = $n->nilai_angka * $n->sks;
        @endphp

        <tr>
            <td>{{ $n->nrp }}</td>
            <td>{{ $n->nilai_angka }}</td>
            <td>{{ $n->sks }}</td>
            <td>{{ $huruf }}</td>
            <td>{{ $bobot }}</td>
        </tr>
        @endforeach

    </table>

</center>
@endsection
