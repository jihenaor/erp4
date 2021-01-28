<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentdetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'transactionnumber', 'value'
    ];

    public function methodpayment()
    {
        return $this->belongsTo(Methodpayment::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

}
