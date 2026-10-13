@extends('layouts.app')

@section('content')
    <h1>Daftar Buku</h1>
    <a href="{{ route('admin.buku.create') }}">+ Tambah Buku</a>

    <table border="1" cellpadding="8">
        <tr><th>Kode</th><th>Judul</th><th>Penulis</th><th>Penerbit</th><th>Tahun</th><th>Stok</th><th>Aksi</th></tr>
        @forelse ($buku as $item)
            <tr>
                <td>{{ $item->kode_buku }}</td><td>{{ $item->judul }}</td>
                <td>{{ $item->penulis }}</td><td>{{ $item->penerbit }}</td>
                <td>{{ $item->tahun_terbit }}</td><td>{{ $item->stok }}</td>
                <td>
                    <a href="{{ route('admin.buku.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('admin.buku.destroy', $item->id) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus buku ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="7">Belum ada data buku.</td></tr>
        @endforelse
    </table>
@endsection
