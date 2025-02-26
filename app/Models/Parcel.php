<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;

    protected $fillable = [
        'tracking_number',
        'sender_id',
        'receiver_name',
        'receiver_address',
        'weight',
        'cost',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parcel_histories()
    {
        return $this->hasMany(Parcel_History::class);
    }
}