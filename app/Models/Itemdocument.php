<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itemdocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'qty', 'unitvalue'
    ];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
