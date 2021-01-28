<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemterm extends Model
{
    use HasFactory;
    protected $fillable = [
        'price'
    ];
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    public function term()
    {
        return $this->belongsTo(Term::class);
    }

}
