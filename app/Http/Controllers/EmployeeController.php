<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeesRole;
use App\Models\Role;
use App\Models\Unit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function store (Request $request)
    {
        try {
            $employee =
                Employee::create($request->all([
                    "unit_id",
                    "name",
                    "cpf",
                    "email"
                ]));
            EmployeesRole::create([
                "employee_id" => data_get($employee, "id", "no-id"),
                "role_id" => data_get($request->all(), "role_id", "no-id"),
                "performance_grade" => 0
            ]);
            return response("", JsonResponse::HTTP_CREATED);
        } catch (\Throwable $th) {
            return response()->json(
                ["error" => $th->getMessage()]
            );
        }
    }

    public function index () : JsonResponse
    {
        try {
            $data =
                collect(EmployeesRole::get())->map(
                    function ($employeesRoleEntity) {
                        $role =
                            Role::find(data_get($employeesRoleEntity, "role_id"));
                        $employee =
                            Employee::find(data_get($employeesRoleEntity, "employee_id"));
                        $unit =
                            Unit::find(data_get($employee, "unit_id"));
                        return [
                            "role" => data_get($role, "role_name", ""),
                            "name" => data_get($employee, "name", ""),
                            "cpf" => data_get($employee, "cpf", ""),
                            "email" => data_get($employee, "email", ""),
                            "unit" => data_get($unit, "fantasy_name", ""),
                        ];
                    }
                )->filter()->values()->toArray();
            return response()->json(
                ["data" => $data]
            );
        } catch (\Throwable $th) {
            return response()->json(
                ["error" => $th->getMessage()]
            );
        }
    }

    public function rank () : JsonResponse
    {
        try {
            $employees =
                EmployeesRole::orderByDesc("performance_grade")->get();
            $data =
                collect($employees)->map(
                    function ($employeesRoleEntity) {
                        $role =
                            Role::find(data_get($employeesRoleEntity, "role_id"));
                        $employee =
                            Employee::find(data_get($employeesRoleEntity, "employee_id"));
                        $unit =
                            Unit::find(data_get($employee, "unit_id"));
                        return [
                            "grade" => data_get($employeesRoleEntity, "performance_grade", 0),
                            "role" => data_get($role, "role_name", ""),
                            "name" => data_get($employee, "name", ""),
                            "cpf" => data_get($employee, "cpf", ""),
                            "email" => data_get($employee, "email", ""),
                            "unit" => data_get($unit, "fantasy_name", ""),
                        ];
                    }
                )->filter()->values()->toArray();
            return response()->json(
                ["data" => $data]
            );
        } catch (\Throwable $th) {
            return response()->json(
                ["error" => $th->getMessage()]
            );
        }
    }

    public function updateGrade (string $employee_id, Request $request)
    {
        try {
            $employee =
                Employee::where("id", $employee_id)->get();
            if (!$employee) {
                return
                    response(
                        ["error" => "Employee not found"],
                        JsonResponse::HTTP_NOT_FOUND
                    );
            }
            $employeeRole =
                EmployeesRole::where("employee_id", $employee_id);
            $employeeRole->update([
                "performance_grade" =>
                    data_get($request->all(), "grade")
            ]);
            return response("", JsonResponse::HTTP_ACCEPTED);
        } catch (\Throwable $th) {
            return response()->json(
                ["error" => $th->getMessage()]
            );
        }
    }
}
