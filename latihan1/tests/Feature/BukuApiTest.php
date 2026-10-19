<?php

namespace Tests\Feature;

use App\Models\Buku;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BukuApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_returns_books_as_json(): void
    {
        $buku = Buku::create([
            'kode_buku' => 'BK001',
            'judul' => 'Belajar Laravel',
            'penulis' => 'A. Penulis',
            'penerbit' => 'Penerbit Contoh',
            'tahun_terbit' => '2026',
            'stok' => 5,
        ]);

        $this->getJson('/buku')
            ->assertOk()
            ->assertJsonCount(1)
            ->assertJsonPath('0.id', $buku->id)
            ->assertJsonPath('0.judul', 'Belajar Laravel');
    }
}
