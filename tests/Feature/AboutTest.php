<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

// beforeEach(function () {
// });

test('la page About se charge correctement', function () {
    $user = User::factory()->create();
    $this->actingAs($user);
    $response = $this->get('/about');
    $response->assertStatus(200);
    $response->assertSee('Notre entreprise');
});
