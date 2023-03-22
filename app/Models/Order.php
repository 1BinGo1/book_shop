<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

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
