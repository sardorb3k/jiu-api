<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleToUser extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'roles_to_users';
    protected $fillable = [
        'user_id',
        'role_id',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
