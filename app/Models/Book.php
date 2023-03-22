<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = "books";

    protected $appends = [
        'orders',
    ];

    protected $visible = [
        'id',
        'title',
        'genre',
        'authors',
        'publishing_house',
        'year_of_publishing',
        'price',
        'count_in_stock',
        'count_pages'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
