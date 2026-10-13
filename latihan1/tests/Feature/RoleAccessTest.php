<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_login_lands_on_the_books_table(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);

        $this->followingRedirects()
            ->post('/login', ['email' => $admin->email, 'password' => 'password'])
            ->assertOk()
            ->assertSee('Daftar Buku')
            ->assertSee('<table', false)
            ->assertSee('Kode');
    }

    public function test_user_login_lands_on_the_members_table(): void
    {
        $user = User::factory()->create(['role' => 'user']);

        $this->followingRedirects()
            ->post('/login', ['email' => $user->email, 'password' => 'password'])
            ->assertOk()
            ->assertSee('Daftar Anggota')
            ->assertSee('<table', false)
            ->assertSee('No. Telepon');
    }

    public function test_admin_and_user_cannot_access_each_others_tables(): void
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $user = User::factory()->create(['role' => 'user']);

        $this->actingAs($admin)
            ->get(route('admin.anggota.index'))
            ->assertForbidden();

        $this->actingAs($user)
            ->get(route('admin.buku.index'))
            ->assertForbidden();
    }
}
