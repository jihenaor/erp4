<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documenttype extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
     protected $fillable = [
        'name'
    ];
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
    public function consecutive()
    {
        return $this->hasMany(Consecutive::class);
    }

}
