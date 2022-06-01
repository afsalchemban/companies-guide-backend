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

        Sanctum::actingAs(User::company());
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/company/profile', [
            'banner' => $file,
            'company_id' => 223
        ])
         ->assertStatus(Response::HTTP_OK);

    }
}
