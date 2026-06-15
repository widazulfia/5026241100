@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <h2>Kode Soal tagihan_air</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('tagihan_air.create') }} " class="btn btn-primary">Input Tagihan Baru</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Meteran</th>
            <th>Penggunaan (m³)</th>
            <th>Total Tagihan</th>
        </tr>

        @forelse($tagihan_air as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NoMeteran }}</td>
                <td>{{ number_format(($row->MeterAkhir - $row->MeterAwal), 0, ',', '.') }}</td>
                <td>{{ number_format((($row->MeterAkhir - $row->MeterAwal)*5000), 0, ',', '.') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data tagihan air.</td>
            </tr>
        @endforelse
    </table>
@endsection
