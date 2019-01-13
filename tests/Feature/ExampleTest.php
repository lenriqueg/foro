<?php

namespace Tests\Unit;

use Tests\FeatureTestCase;

class ExampleTest extends FeatureTestCase
{
    function test_basic_example()
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
