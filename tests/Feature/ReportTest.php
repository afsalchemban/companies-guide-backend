<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;
use Laravel\Sanctum\Sanctum;
use App\Models\User;

class ReportTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_report_sale()
    {
        Sanctum::actingAs(User::admin());
        $response = $this->get('/api/report/sale')
        ->assertStatus(Response::HTTP_OK)->dd();
    }

    public function test_report_company()
    {
        Sanctum::actingAs(User::admin());
        $response = $this->get('/api/report/company')
        ->assertStatus(Response::HTTP_OK);
    }
}
