<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function colors()
    {
        return $this->belongsTo(Color::class);
    }
}
