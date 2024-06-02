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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateTime');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('donation_id');
       
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('donation_id')->references('id')->on('donations');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
