<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispatch extends Model
{
    use HasFactory;

    protected $fillable = [

        'date', 'name', 'adress', 'city', 'schedule', 'deliverydate', 'guidenumber'
    ];

    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    /*public function user()
    {
        return $this->belongsTo(User::class);
    }*/
    //verificar la doble relación

}
