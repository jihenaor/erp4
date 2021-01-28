<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxitemdocument extends Model
{
    use HasFactory;
    protected $fillable = [
        'factor', 'value'
    ];
    public function itemdocument()
    {
        return $this->belongsTo(Itemdocument::class);
    }
    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }
}
