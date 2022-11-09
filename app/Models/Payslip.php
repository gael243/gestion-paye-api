<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payslip extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'number_of_working_hour',
        'number_of_additional_hours',
        'number_of_paid_leave',
        'number_of_holiday'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
