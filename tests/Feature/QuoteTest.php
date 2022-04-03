<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuoteTest extends TestCase
{
    public function test_quote_form()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_quote_api_route()
    {
        $response = $this->get('/api/kanye-quotes');
        $response->assertStatus(200);

    }
    public function test_kanye_west_api_rest()
    {
        $response = $this->get('https://api.kanye.rest/');
        $response->assertStatus(200);
    }

}
