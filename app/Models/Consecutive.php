<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consecutive extends Model
{
    use HasFactory;

    protected $fillable = [
        'startingrange', 'finalrange', 'prefix', 'startingvigence', 'finalvigence', 'consecutive'
    ];

    public function documenttype()
    {
        return $this->belongsTo(Documenttype::class);
    }


   
}
