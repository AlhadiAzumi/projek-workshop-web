@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h1>Edit Buku</h1>
<form action="{{ route('admin.buku.update', $buku->id) }}"
method = "POST">
        @csrf
        @method('PUT')
        <label>Kode Buku:</label>
        <input type="text" name="kode_buku" value="{{ $buku->kode_buku }}" required><br>
        <label>Judul Buku:</label>
        <input type="text" name="judul" value="{{ $buku->judul }}" required><br>
        <label>Penulis:</label>
        <input type="text" name="penulis" value="{{ $buku->penulis }}" required><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" value="{{ $buku->penerbit }}" required><br>
        <label>Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required><br>
        <label>Stok:</label>
        <input type="number" name="stok" value="{{ $buku->stok }}" required><br>
        <button type="submit">Perbarui</button>
</form>
@endsection