<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Database\Factories\RoleFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();

         $team = Team::factory()->create([
             'name' => 'Test Team',
         ]);

         $role = Role::factory()->create([
             'team_id' => $team->id,
         ]);

         User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
             'team_id' => $team->id,
             'role_id' => $role->id,
         ]);


        Role::factory()->count(1)->create();
    }
}
