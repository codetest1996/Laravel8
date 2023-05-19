<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_example2()
    {
        $response = $this->get('/web');

        $response->assertStatus(200);
    }

    public function test_example3()
    {
        $response = $this->get('/web/select');

        $response->assertStatus(200);
    }    
}
