<?php

namespace Tests\Feature\Api;

use GuzzleHttp\ClientTrait;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AcademiaControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    public function test_academia_endpoint_get()
    {
     $response = $this->get('/api/user');

      $response->assertStatus( 200)
                 ->assertSee("Authorized");
   
    }
}
