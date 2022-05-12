<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;

class PublicEndTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_company_by_package()
    {
        $response = $this->getJson('/api/public/companies/1')
        ->assertStatus(Response::HTTP_OK);
    }
    public function test_get_company_all_active()
    {
        $response = $this->getJson('/api/public/companies/active')
        ->assertStatus(Response::HTTP_OK);
    }
    public function test_get_company_all_councils()
    {
        $response = $this->getJson('/api/public/councils')
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_get_council_by_id()
    {
        $response = $this->getJson('/api/public/council/1')
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_get_all_council_companies()
    {
        $response = $this->getJson('/api/public/council_company/1')
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_get_all_council_members()
    {
        $response = $this->getJson('/api/public/council_member/1')
        ->assertStatus(Response::HTTP_OK);
    }
    public function test_get_council_gallery()
    {
        $response = $this->getJson('/api/public/council_media/1')
        ->assertStatus(Response::HTTP_OK);
    }
    public function test_get_council_event()
    {
        $response = $this->getJson('/api/public/council_event/1')
        ->assertStatus(Response::HTTP_OK);
    }
}
