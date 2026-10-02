<?php

namespace App\Models;
use App\Models\Appointment;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'price',
        'duration_minutes',
        'description',
        'is_active',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
