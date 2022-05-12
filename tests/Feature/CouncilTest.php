<?php

namespace Tests\Feature;

use App\Models\CouncilCompany;
use App\Models\CouncilMember;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;

class CouncilTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_add_council_members()
    {
        Sanctum::actingAs(User::council());
        $councilMember = CouncilMember::factory()->make();
        $this->json('post', 'api/council_member', $councilMember->toArray())
         ->assertStatus(Response::HTTP_CREATED);
    }


    public function test_change_council_logo()
    {
        Sanctum::actingAs(User::council(4));
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/change_council_logo/1',[
            'file' => $file,
        ])
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_add_council_companies()
    {
        Sanctum::actingAs(User::council());
        $file = UploadedFile::fake()->image('avatar.jpg');
        $councilCompany = CouncilCompany::factory()->make([
            'logo_file' => $file,
        ]);
        $this->json('post', 'api/council_company', $councilCompany->toArray())
         ->assertStatus(Response::HTTP_CREATED);
    }

    public function test_change_council_cover_image()
    {
        Sanctum::actingAs(User::council(4));
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/change_cover_image/1',[
            'file' => $file,
        ])
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_council_can_upload_gallery()
    {
        Sanctum::actingAs(User::council(4));
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/add_media_image/1',[
            'file' => $file,
            'title' => 'Test Title',
            'description' => 'Test Description',
        ])
        ->assertStatus(Response::HTTP_CREATED);
    }
}
