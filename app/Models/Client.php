<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "clients";

    protected $appends = [
        'person',
        'orders'
    ];

    protected $visible = [
        'id',
        'person_id',
        'vip_status',
        'comment'
    ];

    protected $fillable = [
        'title',
        'person_id',
        'vip_status',
        'comment'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
