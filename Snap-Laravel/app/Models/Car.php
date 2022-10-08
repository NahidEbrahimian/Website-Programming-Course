<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function drivers()
    {
        return $this->belongsTo(Driver::class);
    }
    public function colors()
    {
        return $this->belongsTo(Color::class);
    }
}
