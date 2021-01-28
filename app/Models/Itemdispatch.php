<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemdispatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'qty', 'weigth', 'width', 'height'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function dispatch()
    {
        return $this->belongsTo(Dispatch::class);
    }
}
