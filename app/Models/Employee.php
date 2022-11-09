<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'company_id',
        'payslip_id',
        'vacation_id',
        'bank_id',
        'user_id',
        'first_name',
        'name',
        'birth_date',
        'date_of_hire',
        'address',
        'sex',
        'marital_status',
        'email',
        'phone_number',
        'bank_account',
        'cnss_number',
    ];

    public function company()
    {
        return $this->belongsTo(Compagny::class);
    }

    public function payslip()
    {
        return $this->belongsTo(Payslip::class);
    }

    public function vacation()
    {
        return $this->belongsTo(Vacation::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
