<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

     protected $fillable = [
    'name', 'category', 'location', 'date', 'image',
    'description', 'price',
    'badge', 'label', 'currency', 'tickets'
];

protected $casts = [
    'tickets' => 'array', 
    'hot'      => 'boolean',
    'featured' => 'boolean',
];
}

