<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
    
        'ref', 'name', 'canbesold', 'canbebought', 'itemstype_id', 'category_id', 'barcode', 'notes', 'urlimage'
        
    ];
    
    public function terms()
    {
        return $this->belongsToMany(Term::class);
    }


}
