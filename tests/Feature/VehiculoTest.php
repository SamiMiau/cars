<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Vehiculo;
use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /** @test */
    public function car_appears_on_owner_car_list_after_beeing_created(): void
    {
        $newUser = User::create([
            'name' => 'Sami',
            'email' => 'sami@gmail.com',
            'password' => 'abc123',
            'apellidos' => 'Miau miau'
        ]);
        $newVehiculo = Vehiculo::create([
            'marca' => 'Suzuki',
            'modelo' => 'Spresso',
            'year' => 2023,
            'precio' => 1000,
            'user_id' => $newUser->id,
        ]);
        $response = $this->get('/user/'.$newUser->id.'/vehiculos');
        $response->assertSee(value: 'Suzuki');
        $response->assertSee(value: 'Spresso');
        $response->assertStatus(200);
    }
}
