<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_find()
    {
        User::factory()->create([
            'email' => 'a@admin.com'
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'a@admin.com'
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'x@admin.com'
        ]);
    }
}
