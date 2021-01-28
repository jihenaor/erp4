<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentplan extends Model
{
    use HasFactory;

    protected $fillable = [
        
         'percent', 'value', 'date', 'expiration', 'description'
    ];
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
