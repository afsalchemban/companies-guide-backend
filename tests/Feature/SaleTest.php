<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Company;
use Illuminate\Http\Response;

class SaleTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_company_registered_successfully()
    {
        $company = Company::factory()->make();
        $this->json('post', 'api/company', $company->toArray())
         ->assertStatus(Response::HTTP_CREATED);
        $this->assertDatabaseHas('companies', $company->toArray());
    }

    public function test_package_selected_successfully()
    {
        $payload = [
            'id' => 1,
            'package_id'  => $this->faker->randomNumber(7)
        ];
        $this->json('put', 'api/company_select_package', $payload)
         ->assertStatus(Response::HTTP_OK)
         ->assertExactJson(
            [
                'package_selected' => true
            ]
        );
        $this->assertDatabaseHas('companies', $payload);
    }
}
