<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $table = "services";

    protected $fillable = [
        'user_id',
        'serviceName',
        'price',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }

}

