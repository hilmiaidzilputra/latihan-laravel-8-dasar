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

        // User::create([
        //     'name' => 'Hilmi Aidzil Putra',
        //     'email' => 'hilmiaidzilputra@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Asep Supriatna',
        //     'email' => 'aseps@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam ipsa temporibus omnis voluptatibus sunt aliquid. Assumenda veniam, hic quidem possimus voluptas minima nemo, doloribus excepturi molestias eligendi labore qui sit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat excepturi aut corporis, quaerat aspernatur eum officiis nulla, cumque eos possimus odit amet iusto facilis mollitia culpa molestiae eligendi laborum doloremque modi quos maxime esse? Aspernatur dicta vero ab modi veritatis nesciunt blanditiis dolores eos voluptatum autem quam, ipsam nostrum saepe, aliquid voluptas nulla error cum similique! Ipsum sunt repellat accusamus deserunt, alias animi saepe voluptates aliquam provident soluta mollitia commodi incidunt? Dolores tempora dolorum nihil molestiae officiis neque tempore! Sapiente quam architecto reiciendis, facilis, praesentium vero fuga neque perspiciatis, reprehenderit minima dolorem tempore repellat sequi blanditiis. Laboriosam illo doloribus quos!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam ipsa temporibus omnis voluptatibus sunt aliquid. Assumenda veniam, hic quidem possimus voluptas minima nemo, doloribus excepturi molestias eligendi labore qui sit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat excepturi aut corporis, quaerat aspernatur eum officiis nulla, cumque eos possimus odit amet iusto facilis mollitia culpa molestiae eligendi laborum doloremque modi quos maxime esse? Aspernatur dicta vero ab modi veritatis nesciunt blanditiis dolores eos voluptatum autem quam, ipsam nostrum saepe, aliquid voluptas nulla error cum similique! Ipsum sunt repellat accusamus deserunt, alias animi saepe voluptates aliquam provident soluta mollitia commodi incidunt? Dolores tempora dolorum nihil molestiae officiis neque tempore! Sapiente quam architecto reiciendis, facilis, praesentium vero fuga neque perspiciatis, reprehenderit minima dolorem tempore repellat sequi blanditiis. Laboriosam illo doloribus quos!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam ipsa temporibus omnis voluptatibus sunt aliquid. Assumenda veniam, hic quidem possimus voluptas minima nemo, doloribus excepturi molestias eligendi labore qui sit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat excepturi aut corporis, quaerat aspernatur eum officiis nulla, cumque eos possimus odit amet iusto facilis mollitia culpa molestiae eligendi laborum doloremque modi quos maxime esse? Aspernatur dicta vero ab modi veritatis nesciunt blanditiis dolores eos voluptatum autem quam, ipsam nostrum saepe, aliquid voluptas nulla error cum similique! Ipsum sunt repellat accusamus deserunt, alias animi saepe voluptates aliquam provident soluta mollitia commodi incidunt? Dolores tempora dolorum nihil molestiae officiis neque tempore! Sapiente quam architecto reiciendis, facilis, praesentium vero fuga neque perspiciatis, reprehenderit minima dolorem tempore repellat sequi blanditiis. Laboriosam illo doloribus quos!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam ipsa temporibus omnis voluptatibus sunt aliquid. Assumenda veniam, hic quidem possimus voluptas minima nemo, doloribus excepturi molestias eligendi labore qui sit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat excepturi aut corporis, quaerat aspernatur eum officiis nulla, cumque eos possimus odit amet iusto facilis mollitia culpa molestiae eligendi laborum doloremque modi quos maxime esse? Aspernatur dicta vero ab modi veritatis nesciunt blanditiis dolores eos voluptatum autem quam, ipsam nostrum saepe, aliquid voluptas nulla error cum similique! Ipsum sunt repellat accusamus deserunt, alias animi saepe voluptates aliquam provident soluta mollitia commodi incidunt? Dolores tempora dolorum nihil molestiae officiis neque tempore! Sapiente quam architecto reiciendis, facilis, praesentium vero fuga neque perspiciatis, reprehenderit minima dolorem tempore repellat sequi blanditiis. Laboriosam illo doloribus quos!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
