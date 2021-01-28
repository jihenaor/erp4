<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'identificationtype', 'identificationnumber', 'name', 'adress', 'city', 'phonenumber', 
        'mobilenumber', 'email', 'website', 'urlimage', 'type'
     ];
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
