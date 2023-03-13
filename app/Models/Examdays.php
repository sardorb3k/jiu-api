<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examdays extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'examdays';
    protected $fillable = [
        'name',
        'date',
    ];
}
