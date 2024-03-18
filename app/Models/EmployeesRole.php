<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class EmployeesRole extends Model
{
    /**
     * Get employee
     *
     * @return HasOne
     */
    public function employee () : HasOne
    {
        return $this->hasOne(Employee::class, "employee_id");
    }

    /**
     * Get the role.
     *
     * @return HasOne
     */
    public function role () : HasOne
    {
        return $this->hasOne(Role::class, "role_id");
    }
}
