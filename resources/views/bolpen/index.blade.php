@extends('template')
@section('title', 'Stok Bolpen Toko Nayla')
@section('konten')

    <h2>Stok Bolpen Toko Nayla</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('bolpen.create') }}">Tambah Data Bolpen</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Merk Bolpen</th>
            <th>Stock Bolpen</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>

        @forelse($bolpen as $row)
            <tr>
                <td>{{ $row->MerkBolpen }}</td>
                <td>{{ $row->StockBolpen }}</td>
                <td>{{ $row->Tersedia }}</td>
                <td>
                    <a href="{{ route('bolpen.edit', $row->KodeBolpen) }}" class="btn btn-warning">Edit</a>


                    <form action="{{ route('bolpen.destroy', $row->KodeBolpen) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>

                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data bolpen.</td>
            </tr>
        @endforelse
    </table>
@endsection
