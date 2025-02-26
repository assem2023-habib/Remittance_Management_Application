<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel_History extends Model
{
    use HasFactory;

    protected $fillable = [
        'parcel_id',
        'status',
        'updated_by',
        'created_by_type',
        'operation'
    ];

    public function parcel()
    {
        return $this->belongsTo(Parcel::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}