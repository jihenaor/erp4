<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'date', 'value'
    ];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
    public function paymentdetails()
    {
        return $this->hasMany(Paymentdetail::class);
    }
}
