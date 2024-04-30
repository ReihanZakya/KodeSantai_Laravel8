<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use App\Models\Theme;
use App\Models\Category;
use App\Models\Material;
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
            'name' => 'Reihan',
            'username' => 'reihan',
            'gender' => 'male',
            'email' => 'reihan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Theme::create([
            'name' => 'Javascript',
            'slug' => 'javascript'
        ]);
        Theme::create([
            'name' => 'PHP',
            'slug' => 'php'
        ]);
        Theme::create([
            'name' => 'Java',
            'slug' => 'java'
        ]);

        Theme::factory(21)->create();

        Material::factory(50)->create();

        Link::factory(100)->create();

        Category::create([
            'name' => 'Frontend',
            'slug' => 'frontend',
            'description' => 'Mengembangkan bagian aplikasi web yang berinteraksi dengan pengguna, yaitu hal-hal yang dirender di browser.',
        ]);
        Category::create([
            'name' => 'Backend',
            'slug' => 'backend',
            'description' => 'Kembangkan bagian yang disembunyikan dari pengguna, mis. hal-hal seperti API. database, mesin pencari, dll.'
        ]);
        Category::create([
            'name' => 'Fullstack',
            'slug' => 'fullstack',
            'description' => 'Kembangkan sisi frontend dan backend aplikasi web, yaitu seluruh tumpukan pengembangan.'
        ]);
    }
}
