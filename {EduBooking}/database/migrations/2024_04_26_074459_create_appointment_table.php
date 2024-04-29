<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTable extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  
            $table->date('appointment_day');
            $table->unsignedBigInteger('subject_id');
            $table->string('user_comment', 100);
            $table->timestamps();
            
            // foreign 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
