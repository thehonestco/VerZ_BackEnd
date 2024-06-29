<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    protected $fillable = [
		'splcode',
		'role_id',
		'name',
		'email',
		'email_verified_at',
		'password',
		'nickname',
		'pharmacist_id_no',
		'phone',
		'dob',
		'gender',  // 1 - Male, 2 - Female, 3 - Others
		'address',
		'status' // 1- Active, 0- Inactive
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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
    */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
        ];
    }

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'id');
    }
    public function stores()
    {
        return $this->belongsToMany(Store::class);
    }
}
