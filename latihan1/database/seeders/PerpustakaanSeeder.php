<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Anggota;

class PerpustakaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'kode_buku' => 'BK001',
            'judul' => 'Bumi Manusia',
            'penulis' => 'Pidi Baiq',
            'penerbit' => 'Erlangga',
            'tahun_terbit' => '2007',
            'stok' => 21,
        ]);

        Anggota::create([
            'nama' => 'Alhadi Azumi',
            'alamat' => 'Kumbang Punteut',
            'no_telp' => '08123456789',
            'tgl_lhr' => '2007-12-01',
        ]);
    }
}
