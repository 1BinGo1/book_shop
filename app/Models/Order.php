<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $appends = [
        'book',
        'client',
        'agreement'
    ];

    protected $visible = [
        'id',
        'client_id',
        'book_id',
        'date_order',
        'count_books',
        'date_delivery',
        'type_delivery',
        'price_delivery',
        'price_order',
        'address_delivery',
        'comment'
    ];

    protected $fillable = [
        'client_id',
        'book_id',
        'date_order',
        'count_books',
        'date_delivery',
        'type_delivery',
        'price_delivery',
        'price_order',
        'address_delivery',
        'comment'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function agreement()
    {
        return $this->hasOne(Agreement::class);
    }
}
