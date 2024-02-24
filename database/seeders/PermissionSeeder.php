<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Sport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::truncate();

        Permission::create([
            'name' => 'booking'
        ]);
        Permission::create([
            'name' => 'shift'
        ]);
        Permission::create([
            'name' => 'sport'
        ]);
        Permission::create([
            'name' => 'user'
        ]);

        $sports = Sport::get();

        foreach($sports as $sport){
            Permission::create([
                'name' => strtolower($sport->name)
            ]);
        }
    }
}
