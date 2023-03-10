<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'user_contactinformation';
    protected $fillable = [
        'user_id',
        'country_id',
        'state_id',
        'district_id',
        'region_id',
    ];

    public function district()
    {
        return $this->belongsTo(Districts::class, 'state_id', 'id');
    }

    public function village()
    {
        return $this->belongsTo(Villages::class, 'district_id', 'id');
    }

    public function region()
    {
        return $this->belongsTo(Regions::class, 'region_id', 'id');
    }
}
