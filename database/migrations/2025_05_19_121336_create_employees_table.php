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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('employeeNumber')->unique();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('position');
            $table->string('address');
            $table->string('telephone');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->date('hired_date');
            $table->unsignedBigInteger('department_id');
            // $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
