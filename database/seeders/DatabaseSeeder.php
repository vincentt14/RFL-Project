<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Recycler;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'Vincent',
            'email' => 'vincent@gmail.com',
            'password' => bcrypt('vincent'),
            'volunteer_date' => date('Y-m-d h:i:s'),
            'phone_number' => '08080808'
        ]);

        Recycler::create([
            'name' => 'babon',
            'location' => 'jl.purnama no.1',
            'description' => 'jalan jalan menemu bukit, bukit bukitnya bergelombang, wahai kamu para penuntit, pantatmu akan berlubang'
        ]);
    }
}
