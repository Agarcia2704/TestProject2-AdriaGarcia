<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class MarcosTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_informacion_route()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get(route('empleados.index'));
        $response->assertStatus(200);
    }
}

//TEST RUTA GET