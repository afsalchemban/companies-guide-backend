<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Http\UploadedFile;
use App\Models\User;
use Illuminate\Http\Response;

class CompanyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_company_can_edit_profile(){

        Sanctum::actingAs(User::company(4));
        $file1 = UploadedFile::fake()->image('avatar.jpg');
        $file2 = UploadedFile::fake()->image('s.jpg');
        $this->json('post', 'api/company/profile', [
            'profile_images' => [
                $file1,$file2
            ],
            'name' => 'Edited from Profile',
            'services' => 'Company Services',
            'website' => 'www.profile.com',
            'phone' => '111111',
            'email' => 'full@company.com',
            'facebook' => 'www.facebook.com',
            'twitter' => 'www.twitter.com',
            'youtube' => 'www.youtube.com',
            'aboutus' => 'About US',
            'categories' => [
                [
                    'name' => 'as',
                    'products' => [
                        [
                            'name'=>'Product 1',
                            'desc'=>'Product Description'
                        ],
                        [
                            'name'=>'Product 2',
                            'desc'=>'Product Description 2'
                        ]
                    ]
                ],
                [
                    'name' => 'ass'
                ]
            ]
        ])
         ->assertStatus(Response::HTTP_OK);

    }
}
