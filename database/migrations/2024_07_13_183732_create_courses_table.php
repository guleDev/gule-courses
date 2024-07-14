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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('uniqueCode')->unique();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('userID');
            $table->json('purchased');
            $table->timestamps();

            /* Defines 'userID' as a foreign key that references 'id' in the 'users' table */
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
