<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'departments';
    protected $fillable = [
        'user_id',
        'name',
        'description',
    ];
}
