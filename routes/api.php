<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::prefix("unit")->group(function () {
    Route::get("/", [UnitController::class, "index"]);
    Route::post("/", [UnitController::class, "store"]);
});

Route::prefix("role")->group(function () {
    Route::get("/", [RoleController::class, "index"]);
});

Route::prefix("employee")->group(function () {
    Route::get("/", [EmployeeController::class, "index"]);
    Route::get("/rank", [EmployeeController::class, "rank"]);
    Route::post("/", [EmployeeController::class, "store"]);

    Route::patch("/grade/{employee_id}", [EmployeeController::class, "updateGrade"]);
});
