<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Unit;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function store (Request $request)
    {
        try {
            Unit::create($request->all([
                "fantasy_name",
                "social_reason",
                "cnpj"
            ]));
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
                collect(Unit::get())->map(
                    function ($unit) {
                        $employeesFromUnit =
                            Employee::where("unit_id", data_get($unit, "id"))->count();
                        return [
                            "employees_amount" => $employeesFromUnit,
                            "fantasy_name" => data_get($unit, "fantasy_name", ""),
                            "social_reason" => data_get($unit, "social_reason", ""),
                            "cnpj" => data_get($unit, "cnpj", "")
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
}
