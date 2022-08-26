<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tag;
class HomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_empty()
    {

        $this
        ->get('/')
        ->assertSee('No hay etiquetas');
    }

    public function test_with_Data()
    {
        $tag = Tag::factory()->create();

        $this->assertNotEmpty($tag->name);

        $this
        ->get('/')
        ->assertSee($tag->name)
        ->assertDontSee('No hay etiquetas');
    }
}
