<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'report_details'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
