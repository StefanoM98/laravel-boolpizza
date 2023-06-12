<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $fillable = ['taste', 'price', 'tipe', 'topping'];

    public function toppings()
    {
        return $this->belongsToMany(Topping::class);
    }
}
