<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxi_request extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
