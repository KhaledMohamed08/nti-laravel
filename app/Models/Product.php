<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'stock',
        'price',
        'size'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'colors_products');
    }
}
