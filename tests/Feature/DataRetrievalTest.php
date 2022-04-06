<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class DataRetrievalTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_payment_methods()
    {
        $response = $this->get('/api/payment_methods')
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
        $response = $this->get('/api/company_activities')
        ->assertStatus(Response::HTTP_OK)
        ->assertJsonStructure(
            [
                
                '*' => [
                    'title'
                ]
            ]
        );

    }
}
