<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentStatus extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'enrollment_status';
    protected $fillable = [
        'user_id',
        'status',
        'description',
    ];
}
