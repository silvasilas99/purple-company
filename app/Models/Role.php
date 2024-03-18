<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Role extends Model
{
    use HasFactory;

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
