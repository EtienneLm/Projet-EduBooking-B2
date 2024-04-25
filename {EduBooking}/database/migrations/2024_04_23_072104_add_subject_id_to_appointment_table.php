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
        Schema::table('appointment', function (Blueprint $table) {
            $table->unsignedBigInteger('subject_id');
            
            $table->foreign('subject_id')->references('id')->on('subject')->onDelete('set null');
        });
    }
    
    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::table('appointment', function (Blueprint $table) {
            $table->dropForeign(['subject_id']);
            $table->dropColumn('subject_id');
        });
    }
};
