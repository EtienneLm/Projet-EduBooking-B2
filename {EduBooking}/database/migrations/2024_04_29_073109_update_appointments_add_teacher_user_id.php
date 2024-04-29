<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            if (!Schema::hasColumn('appointments', 'teacher_user_id')) {
                $table->unsignedBigInteger('teacher_user_id')->nullable()->after('id');
                $table->foreign('teacher_user_id')->references('id')->on('users')->onDelete('set null');
            }
        });
    }

    public function down()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropForeign(['teacher_user_id']);
            $table->dropColumn('teacher_user_id');
        });
    }
};
