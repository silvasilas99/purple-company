<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\JsonResponse;

class RoleController extends Controller
{
    public function index () : JsonResponse
    {
        try {
            $data = Role::get();
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
