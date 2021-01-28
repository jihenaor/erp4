<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispatcherdocument extends Model
{
    use HasFactory;
    
    public function dispatch()
    {
        return $this->belongsTo(Dispatch::class);
    }
}
