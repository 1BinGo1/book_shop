<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = "persons";

    protected $appends = [
        'client',
        'employee'
    ];

    protected $visible = [
        'id',
        'surname',
        'name',
        'patronymic',
        'phone',
        'date_of_birth',
        'email',
    ];

    protected $hidden = [
        'password'
    ];

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
}
