<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassportInformation extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'user_passportinformation';
    protected $fillable = [
        'user_id',
        'status',
        'passportnumber',
        'passportseries',
        'pinfl',
        'placeissue',
        'givenby',
        'dateissue',
        'dateexpiration',
        'dateexpiration',
    ];
}
