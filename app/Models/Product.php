<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Définir les champs qui peuvent être remplis
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];
}
