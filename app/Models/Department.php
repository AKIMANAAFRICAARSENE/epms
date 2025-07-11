<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'departmentCode',
        'departmentName',
        'grossSalary',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
