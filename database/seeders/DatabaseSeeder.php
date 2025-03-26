<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(2)->create();

        User::factory()->create([
            'name' => 'Lorenz Girgis',
            'email' => 'girgislorenz@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('password'),
        ]);


        Note::factory(20)->create();
    }
}
