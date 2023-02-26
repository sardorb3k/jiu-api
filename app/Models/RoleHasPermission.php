<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends Model
{
    use HasFactory, HasUlids;
    protected $table = 'role_has_permissions';
    protected $fillable = [
        'permission_id',
        'role_id',
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function scopeByRole($query, $roleId)
    {
        return $query->where('role_id', $roleId)->leftJoin('permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
        ->select('permissions.key', 'permissions.name', 'role_has_permissions.*');
    }
    public function permission()
    {
        return $this->hasOne(Permission::class, 'id');
    }
}
