<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $reez = User::create([
        //     'name' => 'Reez',
        //     'username' => 'reezxyz',
        //     'email' => 'reez@xyz.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, a doloremque. Voluptatibus, laborum vel aliquam quae quasi quam saepe nostrum aperiam fugiat rem quos impedit, quis incidunt esse suscipit error atque magnam consequatur. Quam fugiat et nulla perspiciatis accusamus iure! Qui sequi ipsum dolores hic enim mollitia? Nemo provident eum nulla aliquam dolorum voluptatum dolores iste aliquid sunt ut eligendi, architecto placeat vel nam illum quaerat iusto perspiciatis eius quos minima nobis labore reprehenderit ab numquam? Obcaecati labore laboriosam deleniti repellendus, rerum eveniet, nemo repellat quia, accusantium perspiciatis libero voluptate sapiente molestiae officiis est reprehenderit dicta ut eius placeat. Distinctio!'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
            
            
        ])->create();
    }
}
