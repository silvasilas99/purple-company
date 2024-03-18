<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\EmployeesRole;
use App\Models\Role;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles =
            Role::factory()
                ->count(10)
                ->create();

        $units =
            Unit::factory()
                ->count(100)
                ->create();

        collect($units)->map
        (
            function ($unit) use ($roles)
            {
                $employees =
                    Employee::factory()
                        ->count(20)
                        ->for($unit)
                        ->create();

                collect($employees)->map
                (
                    function ($employee) use ($roles)
                    {
                        EmployeesRole::factory()
                            ->for($employee)
                            ->for($roles->random())
                            ->create();
                    }
                );
            }
        );
    }
}
