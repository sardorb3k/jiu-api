<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentExamday extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'enrollment_examday';
    protected $fillable = [
        'user_id',
        'day_id',
    ];
}
