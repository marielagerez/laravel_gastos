<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GastoModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /**  @test  */
    function load_gasto()
    {
        $response = $this->get('gastos/1/show')
         ->assertStatus(200);
    }
    function edit_gasto()
    {   
        //this->withoutexpetionhandling
        $response = $this->get('gastos/1/edit')
         ->assertStatus(200) ;
    }
    function create_gasto()
    {
        $response = $this->get('gastos/create')
         ->assertStatus(200) ;
    }
}
