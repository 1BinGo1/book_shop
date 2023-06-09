<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $table = "positions";

    protected $appends = [
        'employees'
    ];

    protected $visible = [
        'id',
        'title',
        'salary'
    ];

    protected $fillable = [
        'title',
        'salary'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
