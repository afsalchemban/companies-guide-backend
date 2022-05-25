<?php

namespace Tests\Feature;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class BannerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_can_add_banner(){

        Sanctum::actingAs(User::admin());
        $file = UploadedFile::fake()->image('avatar.jpg');
        $this->json('post', 'api/banner', [
            'banner' => $file,
            'company_id' => 223
        ])
         ->assertStatus(Response::HTTP_CREATED);

    }

    public function test_admin_get_all_banner(){

        Sanctum::actingAs(User::admin());
        $this->json('get', 'api/banner')
         ->assertStatus(Response::HTTP_OK);

    }
}
