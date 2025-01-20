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
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'age',
        'gender',
        'role_id'
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

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }

    public function superadmin()
    {
        return $this->hasOne(Admin::class);
    }

    public function official()
    {
        return $this->hasOne(Admin::class);
    }

    public function onsiteofficer()
    {
        return $this->hasOne(Admin::class);
    }


    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function canAccessFilament(): bool
    {
        return in_array($this->role->role_name, ['Super Admin', 'Admin', 'Official', 'Onsite Officer']);
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
