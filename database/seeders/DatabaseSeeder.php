<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
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

        $noor=User::factory()->create([
            'username' => 'noor',
            'name' => 'Md Ashickur Rahman Noor',
            'email' => 'ashickur.noor@gmail.com',
            'uuid'=>sha1('noor'.time()),
        ]);

        Post::factory(20)->create([
            'author_id' => $noor->id
        ]);

        $this->call([
            CategorySeeder::class,
        ]);
    }
}
