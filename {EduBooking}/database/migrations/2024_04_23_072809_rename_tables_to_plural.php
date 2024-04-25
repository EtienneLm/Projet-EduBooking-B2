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
        Schema::rename('subject', 'subjects');
        Schema::rename('appointment', 'appointments');
    }
    
    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::rename('subjects', 'subject');
        Schema::rename('appointments', 'appointment');
    }
};
