<?php

namespace Tests\Unit\Models;

use PHPUnit\Framework\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_set_name_in_lowercase()
    {
        $post = new Post;
        $post->name = "Proyecto en Laravel";
        $this->assertEquals("proyecto en laravel", $post->name);
    }

    public function test_get_slug()
    {
        $post = new Post;
        $post->name = "Proyecto en Laravel";
        $this->assertEquals("proyecto-en-laravel", $post->slug);
    }

    public function test_href()
    {
        $post = new Post;
        $post->name = "Proyecto en Laravel";

        $this->assertEquals('blog/proyecto-en-laravel', $post->href());
        
    }
}
