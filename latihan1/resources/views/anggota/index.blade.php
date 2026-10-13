@extends('layouts.app')

@section('content')
    <h1>Daftar Anggota</h1>
    <a href="{{ route('admin.anggota.create') }}">+ Tambah Anggota</a>

    <table border="1" cellpadding="8">
        <tr><th>Nama</th><th>Alamat</th><th>No. Telepon</th><th>Tanggal Lahir</th><th>Aksi</th></tr>
        @forelse ($anggota as $item)
            <tr>
                <td>{{ $item->nama }}</td><td>{{ $item->alamat }}</td>
                <td>{{ $item->no_telp }}</td><td>{{ $item->tgl_lhr }}</td>
                <td>
                    <a href="{{ route('admin.anggota.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('admin.anggota.destroy', $item->id) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus anggota ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">Belum ada data anggota.</td></tr>
        @endforelse
    </table>
@endsection