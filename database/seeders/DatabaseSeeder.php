<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Rafael Tejada',
            'email' => 'rgutierreztejada@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        Post::factory(24)->create();
    }
}
