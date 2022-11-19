<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankEmployee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'employee_id',
        'bank_id',
        'card_number',
    ];


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
