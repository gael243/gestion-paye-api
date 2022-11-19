<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'profession_id',
        'employee_id',
        'type_contract_id',
        'date_of_hire',
        'pay_frequency',
        'base_salary',
    ];


    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }

    public function type_contract()
    {
        return $this->belongsTo(TypeContract::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }



}
