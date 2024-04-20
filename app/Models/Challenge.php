<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $fillable = ['name','name_arabic'];
    public function exercises(){
        return $this->belongsToMany(Exercise::class);
    }
}
