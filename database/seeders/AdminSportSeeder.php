<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Sport;
use App\Models\SportUser;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sports = Sport::get();
        $admins = User::where('is_admin', 1)->get();

        foreach($sports as $sport){
            foreach($admins as $admin){
                SportUser::create([
                    'user_id' => $admin->id,
                    'sport_id' => $sport->id,
                ]);
            }
        }
    }
}
