<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'enrollments';
    protected $fillable = [
        'user_id',
        'department_id',
    ];
}
