<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Company;
use Illuminate\Http\Response;
use Laravel\Sanctum\Sanctum;
use App\Models\User;

class SaleTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_sale_can_access_data()
    {
        Sanctum::actingAs(User::sale());
        $this->json('get', 'api/sale/dashboard')
         ->assertStatus(Response::HTTP_OK);
    }

    public function test_company_registered_successfully()
    {
        $user = User::sale();
        $sale = $user->convertToSale();
        Sanctum::actingAs($user);
        $company = Company::factory()->make();
        $this->json('post', 'api/company', $company->toArray())
         ->assertStatus(Response::HTTP_CREATED)->assertJson([
            'sale_id'=>$sale->id
        ]);
        $this->assertDatabaseHas('companies', $company->toArray());

    }

    public function test_package_selected_successfully()
    {
        $payload = [
            'id' => 1,
            'package_id'  => $this->faker->randomNumber(7)
        ];
        $this->json('put', 'api/company/company_select_package', $payload)
         ->assertStatus(Response::HTTP_OK)
         ->assertExactJson(
            [
                'package_selected' => true
            ]
        );
        $this->assertDatabaseHas('companies', $payload);
    }
}
