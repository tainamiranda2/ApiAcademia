<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AcademiaControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_academia_endpoint_get(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
