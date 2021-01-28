<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noveltydocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'description', 'email'
    ];
    public function document()
    {
        return $this->belongsTo(Document::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
