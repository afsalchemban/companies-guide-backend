<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;

class FrontEndTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_company_by_package()
    {
        $response = $this->getJson('/api/frontend/companies/1')
        ->assertStatus(Response::HTTP_OK)->dd();
    }
}
