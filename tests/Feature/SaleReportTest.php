<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;
use Laravel\Sanctum\Sanctum;
use App\Models\User;

class SaleReportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_sale_report_for_admin()
    {
        Sanctum::actingAs(User::admin());
        $payload = [
            'sale_id' => null,
            'package_id' => null,
            'duration' => null
        ];
        $response = $this->post('/api/report/sale',$payload)
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_sale_report_for_sale()
    {
        Sanctum::actingAs(User::sale());
        $payload = [
            'sale_id' => null,
            'package_id' => null,
            'duration' => null
        ];
        $response = $this->post('/api/report/sale',$payload)
        ->assertStatus(Response::HTTP_OK);
    }



    public function test_single_sale_report_for_admin()
    {
        Sanctum::actingAs(User::admin());
        $response = $this->post('/api/report/sale/1')
        ->assertStatus(Response::HTTP_OK);
    }
}