<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Exception;
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
        return self::where('userable_type','admin')->firstOrFail();
    }
    /**
     * Return random sale user if any
     *
     * @var array<string, string>
     */
    public static function sale($id=null):self
    {
        if($id!=null)
        {
            return self::find($id); 
        }
        return self::where('userable_type','sale')->inRandomOrder()
                ->first();
    }
    /**
     * Return random council user if any
     *
     * @var array<string, string>
     */
    public static function council($id=null):self
    {
        if($id!=null)
        {
            return self::find($id); 
        }
        return self::where('userable_type','council')->inRandomOrder()
                ->first();
    }

    /* 
    Return current user is admin or not 
    */
    public function isAdmin() {
        return $this->userable_type == 'admin';
    }
    /* 
    Return current user is sale or not 
    */
    public function isSale() {
        return $this->userable_type == 'sale';
    }
    /* 
    Return current user is council or not 
    */
    public function isCouncil() {
        return $this->userable_type == 'council';
    }
    /* 
    Return current user is company or not 
    */
    public function isCompany() {
        return $this->userable_type == 'company';
    }

    public function userable()
    {
        if($this->isAdmin())
        {
            throw new Exception("This not allowed in admin user");
        }
        return $this->morphTo();
    }
    public function images()
    {
        if(!$this->isAdmin())
        {
            throw new Exception("This is only allowed fro admin");
        }
        return $this->morphMany(Image::class, 'imageble');
    }

}
