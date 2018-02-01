<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAPI()
    {
        $response = $this->json('POST', '/api/v1/test-result', ['numbers' => [1,2,6,10,8]]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'total' => 27,
            ]);
    }
}
