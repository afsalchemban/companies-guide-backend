<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Sale;
use App\Models\Company;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\Sanctum;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_logedd_in_successfully(){
        $payload = [
            'email' => 'admin@admin.com',
            'password'  => 'dummypassword'
        ];
        $this->post('/api/login',$payload)
        ->assertStatus(Response::HTTP_OK)->assertJsonStructure(
            [
                'token',
                'user_type'
            ]
        );
    }

    public function test_admin_can_view_all_companies(){

        Sanctum::actingAs(User::admin());
        $this->json('get', 'api/company')
         ->assertStatus(Response::HTTP_OK)->dd();

    }

    public function test_admin_can_create_sale(){

        Sanctum::actingAs(User::admin());
        $sale = Sale::factory()->make();
        $this->json('post', 'api/sale', $sale->toArray())
         ->assertStatus(Response::HTTP_CREATED);
        $this->assertDatabaseHas('sales', $sale->toArray());

    }

    public function test_admin_can_view_sale(){

        Sanctum::actingAs(User::admin());
        $this->json('get', 'api/sale/1')
         ->assertStatus(Response::HTTP_OK);

    }

    public function test_admin_can_update_sale(){

        Sanctum::actingAs(User::admin());
        $sale = Sale::factory()->make([
            'email' => Sale::find(1)->email,
        ]);
        $this->json('put', 'api/sale/1', $sale->toArray())
         ->assertStatus(Response::HTTP_OK);

    }

    public function test_admin_can_view_company(){

        Sanctum::actingAs(User::admin());
        $this->json('get', 'api/company/1')
         ->assertStatus(Response::HTTP_OK);

    }

    public function test_admin_can_update_company(){

        Sanctum::actingAs(User::admin());
        $company = Company::factory()->make([
            'email' => Company::find(1)->email,
        ]);
        $this->json('put', 'api/company/1', $company->toArray())
         ->assertStatus(Response::HTTP_OK);

    }

    public function test_admin_cannot_create_company(){

        Sanctum::actingAs(User::admin());
        $company = Company::factory()->make();
        $this->json('post', 'api/company', $company->toArray())
         ->assertStatus(Response::HTTP_FORBIDDEN);

    }
    public function test_admin_fails_to_create_sale_by_validation(){

        Sanctum::actingAs(User::admin());
        $this->json('post', 'api/sale', [])
         ->assertJsonValidationErrorFor('name');

    }
    public function test_admin_can_upload_icon(){
        Sanctum::actingAs(User::admin());
        $file = UploadedFile::fake()->image('avatar.jpg');
 
        $this->post('api/sale/upload_profile_image', [
            'file' => $file,
        ])->assertStatus(Response::HTTP_OK);

        Storage::disk('local')->assertExists('sales-profile-images/'.$file->hashName());

    }
}
