<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    /**
     * Get employee's role from role
     *
     * @return HasMany
     */
    public function employees_roles () : HasMany
    {
        return $this->hasMany(EmployeesRole::class);
    }
}
