<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Return the admin user
     *
     * @var array<string, string>
     */
    public static function admin():self
    {
        return self::where('user_type','admin')->firstOrFail();
    }
    /**
     * Return randum sale user if any
     *
     * @var array<string, string>
     */
    public static function sale():self
    {
        return self::where('user_type','sale')->inRandomOrder()
                ->first();
    }

    /**
     * relationship from user table to sale/company
     *
     * @var array<string, string>
     */
    public function convertToSale()
    {
        return $this->saleUser[0];
    }

    /* 
    Return current user is admin or not 
    */
    public function isAdmin() {
        return $this->user_type == 'admin';
    }
    /* 
    Return current user is sale or not 
    */
    public function isSale() {
        return $this->user_type == 'sale';
    }
    /* 
    Return current user is company or not 
    */
    public function isCompany() {
        return $this->user_type == 'company';
    }

    public function saleUser()
    {
        return $this->morphedByMany(Sale::class, 'userable');
    }

}
