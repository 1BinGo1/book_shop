<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = "persons";

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
}
