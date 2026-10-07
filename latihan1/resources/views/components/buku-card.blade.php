@props(['buku'])

<div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
    <h3>{{ $buku->kode_buku }}-{{ $buku->judul }}</h3>
    <p>Penulis: {{ $buku->penulis }}</p>
    <p>Penerbit: {{ $buku->penerbit }}</p>
    <p>Tahun Terbit: {{ $buku->tahun_terbit }}</p>

    @if ($buku->stok > 0)
        <p style="color:green;">Stok: {{ $buku->stok }}</p>
    @else
        <p style="color:red;">Stok: Habis</p>
    @endif
</div>