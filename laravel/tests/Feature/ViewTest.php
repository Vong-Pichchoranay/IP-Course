<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_welcome_page_has_title(): void
    {
        $response = $this->get('/');

        $response->assertSee("Welcome to Ecommerce backend server");
    }
}
