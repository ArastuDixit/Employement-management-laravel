<?php
namespace App\Models\Admin;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
class Admin extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //`updated_at`, `created_at`
    //protected $table = 'admins';
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
    protected $fillable = ['email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at', 'first_name', 'middel_name', 'last_name', 'phone_number', 'country', 'country_code', 'active_status', 'delete_status', 'lat', 'long', 'image', 'android_id', 'ios_id', 'username'];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['email_verified_at' => 'datetime', ];
}
