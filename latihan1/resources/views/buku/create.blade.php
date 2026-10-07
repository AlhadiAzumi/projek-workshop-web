@extends('layouts.app')

@section('title', 'Tambah BUku')

@section('content')
    <h1>Tambah Buku</h1>
    <form action="{{ route('admin.buku.store') }}" method="POST">
        @csrf
        <label>Kode Buku:</label>
        <input type="text" name="kode_buku" required><br>
        <label>Judul Buku:</label>
        <input type="text" name="judul" required><br>
        <label>Penulis:</label>
        <input type="text" name="penulis" required><br>
        <label>Penerbit:</label>
        <input type="text" name="penerbit" required><br>
        <label>Tahun terbit:</label>
        <input type="text" name="tahun_terbit" required><br>
        <label>Stok:</label>
        <input type="number" name="stok" required><br>
        <button type="submit">Simpan</button>
</form>
@endsection