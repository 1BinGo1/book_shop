<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = "employees";

    protected $appends = [
        'person',
        'position',
        'agreements'
    ];

    protected $visible = [
        'id',
        'person_id',
        'position_id',
        'experience',
        'premium',
        'date_hire',
        'requisites'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function agreements()
    {
        return $this->hasMany(Agreement::class);
    }
}
