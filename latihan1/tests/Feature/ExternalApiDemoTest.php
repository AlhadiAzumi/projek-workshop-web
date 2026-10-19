<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ExternalApiDemoTest extends TestCase
{
    public function test_it_displays_users_returned_by_the_external_api(): void
    {
        Http::fake([
            'jsonplaceholder.typicode.com/users' => Http::response([
                [
                    'name' => 'Leanne Graham',
                    'username' => 'Bret',
                ],
            ]),
        ]);

        $this->get('/demo-api-eksternal')
            ->assertOk()
            ->assertSeeText('Leanne Graham')
            ->assertSeeText('Bret');
    }
}
