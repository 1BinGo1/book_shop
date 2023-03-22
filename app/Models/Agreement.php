<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    use HasFactory;

    protected $table = "agreements";

    protected $appends = [
        'employee',
        'order'
    ];

    protected $visible = [
        'id',
        'employee_id',
        'order_id',
        'date_of_registration',
        'comment'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

}
