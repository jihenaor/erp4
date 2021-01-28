<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typenovelty extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'
    ];
    public function noveltydocument()
    {
        return $this->belongsTo(Noveltydocument::class);
    }

    public function typenovelty()
    {
        return $this->hasMany(Typenovelty::class);
    }
}
