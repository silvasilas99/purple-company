<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;

    /**
     * Get unit from employee
     *
     * @return BelongsTo
     */
    public function unit () : BelongsTo
    {
        return $this->belongsTo(Unit::class, "unit_id");
    }

    /**
     * Get employee's role
     *
     * @return BelongsTo
     */
    public function employees_role () : BelongsTo
    {
        return $this->belongsTo(EmployeesRole::class, "employees_role_id");
    }
}
