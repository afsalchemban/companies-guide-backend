<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Company;

use Illuminate\Http\Response;

class CompanySelectPackageTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_package_selected_successfully()
    {
        $payload = [
            'id' => 1,
            'package_id'  => $this->faker->isbn10
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
