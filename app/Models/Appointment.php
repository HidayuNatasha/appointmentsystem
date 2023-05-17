<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    public $table = "appointments";

    protected $fillable = ['user_id', 'car_id', 'service_id', 'start_datetime', 'end_datetime', 'mileage', 'carColour', 'numberPlate', 'created_at', 'updated_at' 
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function cars()
    {
        return $this->belongsToMany(Customer::class);
    }
}
