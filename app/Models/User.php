<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $table = 'users';
    protected $fillable = [
        'firstname',
        'lastname',
        'user_type',
        'username',
        'password',
        'user_type',
        'is_deleted',
        'profile_pic',
        'middle_initial',
        'suffix',
        'sex',
        'place_of_birth',
        'date_of_birth',
        'religion',
        'age',
        'civil_status',
        'height',
        'weight',
        'phone_number',
        'email_address',
        'region',
        'province',
        'city',
        'barangay',
        'street_address',
        'zip_code',
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
        'password' => 'hashed',
    ];
    static public function getAdmin()
    {
        return self::select('users.*')
            ->where('user_type','=','Staff')
            ->where('is_deleted', '=', 0)
            ->orderBy('id', 'desc');
            
    }
    static public function getArchive()
    {
        return self::select('users.*')
            ->where('user_type','=','Staff')
            ->where('is_deleted', '=', 1)
            ->orderBy('id', 'desc');
            
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }
}
