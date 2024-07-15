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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courseID');
            $table->unsignedBigInteger('moduleID');
            $table->string('title');
            $table->text('content');
            $table->timestamps();

            /* Defines 'courseID' as a foreign key that references 'id' in the 'courses' table */
            $table->foreign('courseID')->references('id')->on('courses')->onDelete('cascade');

            /* Defines 'moduleID' as a foreign key that references 'id' in the 'module' table */
            $table->foreign('moduleID')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
