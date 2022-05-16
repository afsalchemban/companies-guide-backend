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

    public function test_user_login_with_wrong_credentials(){
        $payload = [
            'email' => $this->faker->unique()->safeEmail(),
            'password'  => 'fakepassword'
        ];
        $this->post('/api/login',$payload)
        ->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    public function test_access_api_without_login(){
        $this->withHeaders([
            'Accept' => 'application/json',
        ])->get('/api/user')
        ->assertStatus(Response::HTTP_UNAUTHORIZED);
    }

    public function test_logout_successfully(){
        Sanctum::actingAs(
            User::admin());
        $response = $this->get('/api/logout');
 
        $response->assertStatus(Response::HTTP_OK);

    }

}
