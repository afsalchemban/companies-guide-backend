<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Sale;
use Illuminate\Http\Response;
use Laravel\Sanctum\Sanctum;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_logedd_in_successfully(){
        $payload = [
            'email' => 'admin@admin.com',
            'password'  => 'dummypassword'
        ];
        $this->post('/api/login',$payload)
        ->assertStatus(Response::HTTP_OK);
    }
    public function test_admin_can_create_sale(){

        Sanctum::actingAs(User::admin());
        $sale = Sale::factory()->make();
        $this->json('post', 'api/sale', $sale->toArray())
         ->assertStatus(Response::HTTP_CREATED);
        $this->assertDatabaseHas('sales', $sale->toArray());

    }
    public function test_admin_can_create_user_for_sale(){

        Sanctum::actingAs(User::admin());
        $sale = Sale::factory()->create();
        $this->json('get', 'api/sale/create_sale_user/'.$sale->id)
         ->assertStatus(Response::HTTP_CREATED);

    }
}
