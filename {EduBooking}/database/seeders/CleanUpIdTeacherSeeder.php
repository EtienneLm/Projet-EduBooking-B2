<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CleanUpIdTeacherSeeder extends Seeder
{
    public function run()
    {
        User::where('user_type', '<>', 2)->update(['id_teacher' => null]);
    }
}
