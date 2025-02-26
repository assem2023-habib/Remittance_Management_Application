<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_parcels_sent',
        'total_rewards',
        'last_activity'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}