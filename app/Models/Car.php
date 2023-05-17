<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    
    protected $table = "cars";

    protected $fillable = [
        'user_id',
        'brand',
        'model',
    ];
    // a car model belongs to a customer
    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

}
