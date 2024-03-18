<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeesRole extends Model
{
    use HasFactory;


    /**
     * Get the employee.
     *
     * @return BelongsTo
     */
    public function employee () : BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * Get the role.
     *
     * @return BelongsTo
     */
    public function role () : BelongsTo
    {
        return $this->BelongsTo(Role::class);
    }
}
