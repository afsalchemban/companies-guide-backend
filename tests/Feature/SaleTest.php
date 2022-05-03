<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Company;
use Illuminate\Http\Response;
use Laravel\Sanctum\Sanctum;
use App\Models\User;

use Illuminate\Http\UploadedFile;

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



    public function test_sale_fails_to_add_combany_by_validation(){

        Sanctum::actingAs(User::sale());
        $this->json('post', 'api/company', [])
        ->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY)
         ->assertJsonValidationErrorFor('business_name');

    }

    public function test_company_package_added_to_cache_and_pay_by_cash()
    {
        $user = User::sale();
        Sanctum::actingAs($user);
        $company = Company::factory()->make();
        $this->json('post', 'api/company', $company->toArray())->assertExactJson(
            [
                'company_added' => true
            ]
        );

        $payload = [
            'package_id'  => 1
        ];
        $this->json('put', 'api/company/company_select_package', $payload)
         ->assertStatus(Response::HTTP_OK)
         ->assertExactJson(
            [
                'package_added' => true
            ]
        );

        $payload = [
            'discount_percentage'  => 10,
            'discount_amount'  => 500,
            'amount'  => 6700,
        ];
        $this->json('post', 'api/company/pay/cash', $payload)
        ->assertStatus(Response::HTTP_OK);

    }

    public function test_company_package_added_to_cache_and_pay_by_cheque()
    {
        $user = User::sale();
        Sanctum::actingAs($user);
        $company = Company::factory()->make();
        $this->json('post', 'api/company', $company->toArray())->assertExactJson(
            [
                'company_added' => true
            ]
        );

        $payload = [
            'package_id'  => 2
        ];
        $this->json('put', 'api/company/company_select_package', $payload)
         ->assertStatus(Response::HTTP_OK)
         ->assertExactJson(
            [
                'package_added' => true
            ]
        );

        $file = UploadedFile::fake()->image('avatar.jpg');
        $payload = [
            'discount_percentage'  => 10,
            'discount_amount'  => 500,
            'amount'  => 6700,
            'cheque_number' => 'AE324889279FD',
            'bank_name' => 'DIB',
            'cheque_image' => $file
        ];
        $this->json('post', 'api/company/pay/cheque', $payload)
        ->assertStatus(Response::HTTP_OK);

    }

    public function test_company_package_added_to_cache_and_pay_by_bank()
    {
        $user = User::sale();
        Sanctum::actingAs($user);
        $company = Company::factory()->make();
        $this->json('post', 'api/company', $company->toArray())->assertExactJson(
            [
                'company_added' => true
            ]
        );

        $payload = [
            'package_id'  => 3
        ];
        $this->json('put', 'api/company/company_select_package', $payload)
         ->assertStatus(Response::HTTP_OK)
         ->assertExactJson(
            [
                'package_added' => true
            ]
        );
        
        $payload = [
            'discount_percentage'  => 10,
            'discount_amount'  => 500,
            'amount'  => 6700,
            'reference_number' => 'AE324889279FD',
            'bank_name' => 'DIB',
        ];
        $this->json('post', 'api/company/pay/bank', $payload)
        ->assertStatus(Response::HTTP_OK);

    }

    public function test_order_page_data(){
        $user = User::sale(2);
        Sanctum::actingAs($user);
        $this->json('get', 'api/company/order_info')
         ->assertStatus(Response::HTTP_OK);
    }
}
