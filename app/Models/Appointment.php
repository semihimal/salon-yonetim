<?php

namespace App\Models;
use App\Models\Customer;
use App\Models\Service;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'customer_id',
        'service_id',
        'appointment_at',
        'status',
        'notes',
    ];

    public function casts(): array
    {
        return [
            'appointment_at' => 'datetime',
        ];
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
