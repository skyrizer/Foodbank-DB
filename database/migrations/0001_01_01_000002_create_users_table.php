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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_no');
            $table->string('matric_no')->nullable();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('cafe_id')->nullable();

           
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('cafe_id')->references('id')->on('cafes');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
