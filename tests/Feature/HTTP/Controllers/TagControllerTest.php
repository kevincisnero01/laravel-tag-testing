<?php

namespace Tests\Feature\HTTP\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagControllerTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_store_tag()
    {
        $this
            ->post('tags', ['name' => 'PHP' ])
            ->assertRedirect('/');

        $this->assertDatabaseHas('tags', ['name' => 'PHP']);

        
    }
}
