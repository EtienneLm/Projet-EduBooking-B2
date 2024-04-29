<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'teacher_user_id')) {
                $table->unsignedBigInteger('teacher_user_id')->unique()->nullable();
            }
        });

        $teachers = DB::table('users')->where('user_type', 2)->get();
        foreach ($teachers as $index => $teacher) {
            DB::table('users')
                ->where('id', $teacher->id)
                ->update(['teacher_user_id' => $teacher->id]); 
        }
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('teacher_user_id');
        });
    }
};

