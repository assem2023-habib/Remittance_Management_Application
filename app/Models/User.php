<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Parcel;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'address',
        'city',
        'country',
        'role',
        'is_active'
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

    public function parcels()
    {
        return $this->hasMany("Parcel::class");
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function parcel_histories()
    {
        // return $this->morphMany(Parcel_History::class, 'updatedBy');
        return $this->hasMany(Parcel_History::class);
    }
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
    public function statistics()
    {
        return $this->hasMany(Statistics::class);
    }
}