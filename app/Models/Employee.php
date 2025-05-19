<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'employeeNumber',
        'firstName',
        'lastName',
        'position',
        'address',
        'telephone',
        'gender',
        'hired_date',
        'department_id',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
