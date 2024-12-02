<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_contact(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Contact');
    }
}