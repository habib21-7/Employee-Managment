<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'age',
        'address',
        'country',
        'department',
        'division',
        'city',
        'region',
        'departments_id',
        'photo',
    ];

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this -> belongsTo(Department::class,'departments_id');
    }
}
