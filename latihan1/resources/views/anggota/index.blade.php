@extends('layouts.app')

@section('content')
    <h1>Daftar Anggota</h1>

    <a href="{{ route('admin.anggota.create') }}">+ Tambah Anggota</a>
    @foreach ($anggota as $item)

     <x-anggota-card :anggota="$item" />
     <a href="{{ route('admin.anggota.edit', $item->id) }}">Edit</a>
     <form action="{{ route('admin.anggota.destroy', $item->id) }}"
    method="POST" style="display:inline;"
    onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
    </form>

     @endforeach
@endsection 