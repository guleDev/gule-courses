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
        /* Create table 'modules' in DB */
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courseID');
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('userID');
            $table->timestamps();

            /* Defines 'courseID' as a foreign key that references 'id' in the 'courses' table */
            $table->foreign('courseID')->references('id')->on('courses')->onDelete('cascade');

            /* Defines 'userID' as a foreign key that references 'id' in the 'users' table */
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
