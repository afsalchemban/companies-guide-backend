<?php

namespace Tests\Feature;

use App\Models\Council;
use App\Models\CouncilCompany;
use App\Models\CouncilEvent;
use App\Models\CouncilMedia;
use App\Models\CouncilMember;
use App\Models\User;
use Database\Factories\CouncilCompanyFactory;
use Database\Factories\CouncilMemberFactory;
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
        Sanctum::actingAs(User::council(5));
        $councilMember = CouncilMember::factory()->make();
        $this->json('post', 'api/council/council_member/1', $councilMember->toArray())
         ->assertStatus(Response::HTTP_CREATED);
    }


    public function test_change_council_logo()
    {
        Sanctum::actingAs(User::council(5));
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/change_council_logo/1',[
            'file' => $file,
        ])
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_add_council_companies()
    {
        Sanctum::actingAs(User::council(5));
        $file = UploadedFile::fake()->image('avatar.jpg');
        $councilCompany = CouncilCompany::factory()->make([
            'logo_file' => $file,
        ]);
        $this->json('post', 'api/council/council_company/1', $councilCompany->toArray())
         ->assertStatus(Response::HTTP_CREATED);
    }

    public function test_change_council_cover_image()
    {
        Sanctum::actingAs(User::council(5));
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/change_cover_image/1',[
            'file' => $file,
        ])
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_council_can_add_media()
    {
        Sanctum::actingAs(User::council(5));
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/add_media_image/1',[
            'file' => $file,
            'title' => 'Test Title',
            'description' => 'Test Description',
        ])
        ->assertStatus(Response::HTTP_CREATED);
    }

    public function test_council_can_add_event()
    {
        Sanctum::actingAs(User::council(5));
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/add_event/1',[
            'name' => 'afsal',
            'location' => 'dubai',
            'event_date' => '2022-01-01',
            'link' => 'testlink',
            'image' => $file
        ])
        ->assertStatus(Response::HTTP_CREATED);
    }

    public function test_council_can_update_council()
    {
        Sanctum::actingAs(User::council(5));
        $council = Council::factory()->make();
        $this->json('put', 'api/council/1', $council->toArray())
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_council_can_update_member()
    {
        Sanctum::actingAs(User::council(5));
        $councilMember = CouncilMember::factory()->make();
        $this->json('put', 'api/council/council_member/1/1', $councilMember->toArray())
        ->assertStatus(Response::HTTP_OK);
    }

    public function test_council_can_update_company()
    {
        Sanctum::actingAs(User::council(5));
        $councilCompany = CouncilCompany::factory()->make();
        $this->json('put', 'api/council/council_company/1/1', $councilCompany->toArray())
        ->assertStatus(Response::HTTP_OK);
    }
    public function test_council_can_change_company_logo()
    {
        Sanctum::actingAs(User::council(5));
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/change_company_logo/1/1', [
            'file' => $file
        ])
        ->assertStatus(Response::HTTP_OK);
    }
    public function test_council_can_change_member_image()
    {
        Sanctum::actingAs(User::council(5));
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/council/change_member_image/1/1', [
            'file' => $file
        ])
        ->assertStatus(Response::HTTP_OK);
    }
    public function test_council_can_update_event()
    {
        Sanctum::actingAs(User::council(5));
        $this->json('put', 'api/council/update_event/1/1', [
            'name' => 'update',
            'location' => 'abudhabi',
            'event_date' => '2022-01-04',
            'link' => 'testlink',
        ])
        ->assertStatus(Response::HTTP_OK);
    }
    public function test_council_can_update_media()
    {
        Sanctum::actingAs(User::council(5));
        $this->json('put', 'api/council/update_media/1/1', [
            'title' => 'Test Title afsal',
            'description' => 'Test Description afsal',
        ])
        ->assertStatus(Response::HTTP_OK);
    }
    
    public function test_council_can_delete_media()
    {
        $user = Sanctum::actingAs(User::council(5));
        $council = $user->userable;
        $councilMedia = CouncilMedia::factory()->create([
            'council_id' => $council->id
        ]);
        $this->json('delete', 'api/council/delete_media/1/'.$councilMedia->id)
        ->assertStatus(Response::HTTP_OK);
    }
    public function test_council_can_delete_event()
    {
        $user = Sanctum::actingAs(User::council(5));
        $council = $user->userable;
        $councilEvent = CouncilEvent::factory()->create([
            'council_id' => $council->id
        ]);
        $this->json('delete', 'api/council/delete_event/1/'.$councilEvent->id)
        ->assertStatus(Response::HTTP_OK);
    }
}
