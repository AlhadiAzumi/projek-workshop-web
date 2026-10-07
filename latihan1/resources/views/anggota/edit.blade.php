@extends('layouts.app')

@section('title', 'Edit Anggota')

@section('content')
    <h1>Edit Anggota</h1>
<form action="{{ route('admin.anggota.update', $anggota->id) }}"
method = "POST">
        @csrf
        @method('PUT')
        <label>Nama:</label>
        <input type="text" name="nama" value="{{ $anggota->nama }}" required><br>
        <label>Alamat:</label>
        <input type="text" name="alamat" value="{{ $anggota->alamat }}" required><br>
        <label>No Telp:</label>
        <input type="text" name="no_telp" value="{{ $anggota->no_telp }}" required><br>
        <label>Tanggal Lahir:</label>
        <input type="text" name="tgl_lhr" value="{{ $anggota->tgl_lhr }}" required><br>
        <button type="submit">Perbarui</button>
</form>
@endsection