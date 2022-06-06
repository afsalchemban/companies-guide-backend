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
        $this->json('put', 'api/company/profile', [
            'profile_page_images' => [
                $file1,$file2
            ],
            'name' => 'Edited from Profile',
            'services' => 'Company Services',
            'website' => 'www.profile.com',
            'phone' => '111111',
            'email' => 'full@company.com',
            'aboutus' => 'About US',
            'social' => ['facebook','twitter'],
        ])
         ->assertStatus(Response::HTTP_OK);

    }
    public function test_company_can_add_products(){
        Sanctum::actingAs(User::company(4));
        $file1 = UploadedFile::fake()->image('avatar.jpg');
        $payload = [
                        'category_id' => 1303,
                        'name'=> 'Brand Name',
                        'description' => 'description',
                        'image' => $file1
                    ];
        $this->json('post', 'api/company/add_product', $payload)->assertStatus(Response::HTTP_CREATED);

    }

}
