<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Person extends Model
{
    use HasFactory;

    protected $table = "persons";

    protected $appends = [
        'client',
        'employee',
        'role'
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

    protected $fillable = [
        'surname',
        'name',
        'patronymic',
        'phone',
        'date_of_birth',
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    protected $casts = [
        'date_of_birth' => 'datetime:d-m-Y',
    ];

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function setDateOfBirthAttribute($value){
        $this->attributes['date_of_birth'] = Carbon::parse($value)->format('Y-m-d');
    }
}
