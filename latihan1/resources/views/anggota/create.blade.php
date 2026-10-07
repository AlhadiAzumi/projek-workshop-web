@extends('layouts.app')

@section('title', 'Tambah Anggota')

@section('content')
    <h1>Tambah Anggota</h1>
    <form action="{{ route('admin.anggota.store') }}" method="POST">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>
        <label>No Telp:</label>
        <input type="text" name="no_telp" required><br>
        <label>Tanggal lahir:</label>
        <input type="text" name="tgl_lhr" required><br>
        <button type="submit">Simpan</button>
</form>
@endsection