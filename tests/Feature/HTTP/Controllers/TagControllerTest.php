<?php

namespace Tests\Feature\HTTP\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Tag;
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

    public function test_destroy_tag()
    {
        $tag = Tag::factory()->create();

        $this
            ->delete("tags/$tag->id")
            ->assertRedirect('/');

        $this->assertDatabaseMissing('tags', ['name' => 'PHP' ]);
    }

    public function test_validate_tag()
    {
        $this
            ->post('tags', ['name' =>''])
            ->assertSessionHasErrors('name');
    }
}
