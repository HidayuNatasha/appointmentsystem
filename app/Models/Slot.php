<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    protected $table = "slots";

    protected $fillable = [
        'start_time', 'end_time', 'description', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
