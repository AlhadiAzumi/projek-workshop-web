@props(['anggota'])

<div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
    <h3>{{ $anggota->nama }}</h3>
    <p>Alamat: {{ $anggota->alamat }}</p>
    <p>No. Telepon: {{ $anggota->no_telp }}</p>
    <p>Tanggal Lahir: {{ $anggota->tgl_lhr }}</p>
</div>