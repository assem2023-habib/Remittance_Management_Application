<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'role',
        'assigned_center'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function parcel_histories()
    {
        return $this->morphMany(Parcel_History::class, 'updatedBy');
    }
}
