<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;
use Laravel\Sanctum\Sanctum;
use App\Models\User;

class CompanyReportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_company_report_for_admin()
    {
        Sanctum::actingAs(User::admin());
        $payload = [
            'company_id' => null,
            'package_id' => null,
            'company_activity_id' => null,
            'duration' => '{"type":"last-30"}'
        ];
        $response = $this->post('/api/report/company',$payload)
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_company_report_for_sale()
    {
        Sanctum::actingAs(User::sale());
        $payload = [
            'company_id' => null,
            'package_id' => null,
            'company_activity_id' => null,
            'duration' => null
        ];
        $response = $this->post('/api/report/company',$payload)
        ->assertStatus(Response::HTTP_OK)->assertJsonStructure(
            [
                'data' => [
                    '*' => [
                        'business_name',
                        'created_at'
                    ]
                ]
            ]
        );
    }

    public function test_single_company_report_for_admin()
    {
        Sanctum::actingAs(User::admin());
        $response = $this->post('/api/report/company/2')
        ->assertStatus(Response::HTTP_OK);
    }
}
