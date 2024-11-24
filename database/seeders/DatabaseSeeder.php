<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Fahriza Rizky',
            'username' => 'fahrizarizky',
            'email' => 'fahrizarizky6@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Fauziyan syahputra',
        //     'email' => 'fauziyansyahputra12@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aut nam beatae dignissimos et,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aut nam beatae dignissimos et, iure nemo ad maxime saepe deleniti quis ut perspiciatis tempora nihil praesentium quasi quos libero obcaecati. Eos ipsum, quos aspernatur dolores quidem officia deleniti ea quaerat recusandae, eius doloribus harum tempore, dolore consectetur nemo sunt beatae ratione aliquid placeat? Nobis possimus earum facere suscipit rem eveniet animi molestias ad ipsum autem odio, illum minima voluptatum quo, explicabo inventore ducimus tempora repellat quaerat illo exercitationem officiis. Quis, molestiae. Consequuntur, veritatis. Labore mollitia a maiores quia, fugit ratione excepturi, debitis laudantium dolorum voluptates animi sit modi provident aperiam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);




        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aut nam beatae dignissimos et,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aut nam beatae dignissimos et, iure nemo ad maxime saepe deleniti quis ut perspiciatis tempora nihil praesentium quasi quos libero obcaecati. Eos ipsum, quos aspernatur dolores quidem officia deleniti ea quaerat recusandae, eius doloribus harum tempore, dolore consectetur nemo sunt beatae ratione aliquid placeat? Nobis possimus earum facere suscipit rem eveniet animi molestias ad ipsum autem odio, illum minima voluptatum quo, explicabo inventore ducimus tempora repellat quaerat illo exercitationem officiis. Quis, molestiae. Consequuntur, veritatis. Labore mollitia a maiores quia, fugit ratione excepturi, debitis laudantium dolorum voluptates animi sit modi provident aperiam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);




        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aut nam beatae dignissimos et,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aut nam beatae dignissimos et, iure nemo ad maxime saepe deleniti quis ut perspiciatis tempora nihil praesentium quasi quos libero obcaecati. Eos ipsum, quos aspernatur dolores quidem officia deleniti ea quaerat recusandae, eius doloribus harum tempore, dolore consectetur nemo sunt beatae ratione aliquid placeat? Nobis possimus earum facere suscipit rem eveniet animi molestias ad ipsum autem odio, illum minima voluptatum quo, explicabo inventore ducimus tempora repellat quaerat illo exercitationem officiis. Quis, molestiae. Consequuntur, veritatis. Labore mollitia a maiores quia, fugit ratione excepturi, debitis laudantium dolorum voluptates animi sit modi provident aperiam!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);



        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-Empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aut nam beatae dignissimos et,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta aut nam beatae dignissimos et, iure nemo ad maxime saepe deleniti quis ut perspiciatis tempora nihil praesentium quasi quos libero obcaecati. Eos ipsum, quos aspernatur dolores quidem officia deleniti ea quaerat recusandae, eius doloribus harum tempore, dolore consectetur nemo sunt beatae ratione aliquid placeat? Nobis possimus earum facere suscipit rem eveniet animi molestias ad ipsum autem odio, illum minima voluptatum quo, explicabo inventore ducimus tempora repellat quaerat illo exercitationem officiis. Quis, molestiae. Consequuntur, veritatis. Labore mollitia a maiores quia, fugit ratione excepturi, debitis laudantium dolorum voluptates animi sit modi provident aperiam!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
