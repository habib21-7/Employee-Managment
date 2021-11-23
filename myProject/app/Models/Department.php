<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $hidden = [
        '	created_at', 'updated_at',
    ];
    public function employees(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this -> hasMany(Employee::class,'departments_id');
    }
}
