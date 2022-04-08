<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class DataTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_payment_methods()
    {
        $response = $this->get('/api/data/payment_methods')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                'payment_methods' => [
                    '*' => [
                        'name'
                    ]
                ]
            ]
        );

    }
    /* 
    Test for company activities
    */
    public function test_get_company_activities()
    {
        $response = $this->getJson('/api/data/company_activities/a')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure([
            'activities' => [
                '*' => [
                     'title'
                ]
            ]
        ]);

    }
    /* 
    get countries
    */
    public function test_get_countries()
    {
        $response = $this->get('/api/data/countries')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                'countries' => [
                '*' => [
                    'name',
                    'id'
                ]
                ]
            ]
        );

    }
    /* 
    get cities by country
    */
    public function test_get_cities_by_country()
    {
        $response = $this->get('/api/data/cities/1')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                'cities' => [
                '*' => [
                    'name',
                    'id'
                ]
                ]
            ]
        );

    }
    /* 
    get areas by city
    */
    public function test_get_areas_by_city()
    {
        $response = $this->get('/api/data/areas/1')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                'areas' => [
                '*' => [
                    'name',
                    'id'
                ]
                ]
            ]
        );

    }
    /* 
    get legal statuses
    */
    public function test_get_legal_statuses()
    {
        $response = $this->get('/api/data/legal_statuses')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                'legal_statuses' => [
                '*' => [
                    'name'
                ]
                ]
            ]
        );

    }
    /* 
    get legal statuses
    */
    public function test_get_issued_by()
    {
        $response = $this->get('/api/data/issued_by')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                'issued_by' => [
                '*' => [
                    'name'
                ]
                ]
            ]
        );

    }
    /* 
    get legal statuses
    */
    public function test_get_reports()
    {
        $response = $this->get('/api/data/reports')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                'reports' => [
                '*' => [
                    'name'
                ]
                ]
            ]
        );

    }
}
