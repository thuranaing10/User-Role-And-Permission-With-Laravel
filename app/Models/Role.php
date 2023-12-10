<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table ="roles";

    use HasFactory;

    // public function permissions()
    // {
    //     return $this->hasMany(Permission::class);
    // }

    public function rolePermissions()
    {
        return $this->hasMany(RolePermission::class);
    }
}
