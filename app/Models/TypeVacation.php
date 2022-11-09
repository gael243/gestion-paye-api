<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeVacation extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name'
      ];

    public function vacations()
    {
        return $this->hasMany(Vacation::class);
    }
    
}
