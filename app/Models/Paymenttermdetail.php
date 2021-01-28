<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymenttermdetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'value', 'expiration', 'expirationtype'
    ];
    public function paymentterm()
    {
        return $this->belongsTo(Paymentterm::class);
    }
    
}
