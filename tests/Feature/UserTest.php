<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Http\Response;
use Laravel\Sanctum\Sanctum;

class UserTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_1_user_registration_success()
    {
        $user = User::factory()->create();
        $this->assertDatabaseHas('users', $user->toArray());
    }

    public function test_2_user_login_with_wrong_credentials(){
        $payload = [
            'email' => $this->faker->unique()->safeEmail(),
            'password'  => 'fakepassword'
        ];
        $this->post('/api/login',$payload)
        ->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    public function test_3_user_login_with_credentials(){
        $payload = [
            'email' => 'sandra74@example.org',
            'password'  => 'dummypassword'
        ];
        $this->post('/api/login',$payload)
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_4_access_api_without_login(){
        $this->withHeaders([
            'Accept' => 'application/json',
        ])->get('/api/user')
        ->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    public function test_5_get_user_after_login(){
        Sanctum::actingAs(
            User::factory()->create());
        $response = $this->get('/api/user');
 
        $response->assertStatus(Response::HTTP_OK);
 
 
        $response->dd();
    }

}
