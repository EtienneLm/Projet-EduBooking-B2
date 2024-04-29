<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        $defaultTeacherId = 1; 
        
        \App\Models\User::where('user_type', 2)->update(['teacher_user_id' => $defaultTeacherId]);
    }
    
    public function down()
    {
        \App\Models\User::where('user_type', 2)->update(['teacher_user_id' => null]);
    }
};
