<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Animal::factory()->create([
            "name" => "Hello World",
            "animal" => "pufferfish",
            "description" => "He doesn't like trees a lot.",
            "age" => 100000,
            "image" =>"https://static.wikia.nocookie.net/stripepedia-revamped/images/5/5c/Wabungus.png/revision/latest?cb=20220708092845",
            "alt-image" => "a man holding a wabungus",
        ]);
    }
}
