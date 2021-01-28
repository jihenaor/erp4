<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentterm extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description'
    ];

    public function document()
    {
        return $this->hasMany(Document::class);
    }
    public function paymenttermdetail()
    {
        return $this->hasMany(Paymenttermdetail::class);
    }
}
