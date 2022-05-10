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
        Sanctum::actingAs(User::council());
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/change_profile_image',[
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
        Sanctum::actingAs(User::council());
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/change_cover_image',[
            'file' => $file,
        ])
        ->assertStatus(Response::HTTP_OK);
    }
}
