<?php

namespace Tests\Feature;

use App\Models\CouncilMember;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;
use Illuminate\Http\Response;

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
}
