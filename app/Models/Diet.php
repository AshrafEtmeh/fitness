<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
    use HasFactory;

    protected $fillable = ['name','name_arabic'];

    public function meals() {
        return $this->belongsToMany(Meal::class);
    }
}
