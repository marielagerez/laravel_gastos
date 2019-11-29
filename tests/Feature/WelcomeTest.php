<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeTest extends TestCase
{
    /**  @test  */
     function inicioTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /**  @test  */

     
}
