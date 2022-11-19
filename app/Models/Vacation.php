<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'type_vacation_id',
        'employee_id',
        'duration_of_vacation',
        'start_date',
        'end_date'
      ];
    
    public function type_vacation()
    {
        return $this->belongsTo(TypeVacation::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
