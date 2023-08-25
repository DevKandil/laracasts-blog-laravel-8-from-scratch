<?php

namespace Database\Seeders;

use App\Models\Category;
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
//        User::truncate();
//        Category::truncate();
//        Post::truncate();

//        User::factory()->create();
//        Category::factory()->create();

        $user = User::factory()->create([
            'name' => 'Dev Kandil'
        ]);

        Post::factory(10)->create([
            'user_id' => $user->id
        ]);

//        $user = User::factory()->create();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//        $hobbies = Category::create([
//            'name' => 'Hobbies',
//            'slug' => 'hobbies'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'slug' => 'php_is_much_fun',
//            'title' => 'PHP is Much Fun',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing eli.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus.'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'slug' => 'laravel_is_amazing',
//            'title' => 'Laravel is Amazing',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing eli.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus.'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $hobbies->id,
//            'slug' => 'jquery_is_js_framework',
//            'title' => 'jQuery is JS FrameWork',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing eli.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus.'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'slug' => 'about_the_author',
//            'title' => 'About The Author',
//            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing eli.',
//            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, magni quas! Debitis eum explicabo facilis incidunt itaque iure iusto nesciunt praesentium quod recusandae repellat, repellendus sint sunt unde voluptates voluptatibus.'
//        ]);
    }
}
