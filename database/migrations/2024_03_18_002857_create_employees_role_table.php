<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("employees_roles", function (Blueprint $table) {
            $table->id();
            $table->foreignId("employee_id");
            $table->foreignId("role_id");
            $table->float("performance_grade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("employees_roles");
    }
};
