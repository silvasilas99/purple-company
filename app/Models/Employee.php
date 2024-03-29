<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ["unit_id", "name", "cpf", "email"];

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
     * @return HasOne
     */
    public function employees_roles () : HasMany
    {
        return $this->hasMany(EmployeesRole::class);
    }
}
