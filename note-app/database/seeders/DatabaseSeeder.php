<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Todo;
use App\Models\Note;

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
            'id' => 1,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('pass123.')
        ]);

        // Создаем 100 заметок для теста
        Note::factory(100)->create();

        // Добавьте сюда новый код, если нужно
        Todo::factory(10)->create();
    }
}
