<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_petugas_can_access_anggota_but_not_buku(): void
    {
        $this->withSession(['role' => 'petugas'])
            ->get('/admin/anggota')
            ->assertOk();

        $this->withSession(['role' => 'petugas'])
            ->get('/admin/buku')
            ->assertForbidden();
    }
}