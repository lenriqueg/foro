<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Luis Enrique',
            'email' => 'lenrique-g@outlook.com'
        ]);

        $this->actingAs($user, 'api')
            ->get('/api/user')
            ->assertSee('Luis Enrique')
            ->assertSee('lenrique-g@outlook.com');
    }
}
