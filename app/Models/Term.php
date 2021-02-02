<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function items()
    {
        return $this->belongsToMany(Items::class)->withTimestamps();
    }
}
