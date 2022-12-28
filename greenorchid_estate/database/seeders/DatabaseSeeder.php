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
            'name'=>'Alifiyul Akyun',
            'username'=>'Akyun',
            'email'=> 'gpolinema@gmail.com',
            'password'=> bcrypt('12345')
        ]);
        // User::create([
        //     'name'=>'Lin Yi',
        //     'email'=> 'linyi@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);
        User::factory(3)->create();
        Category::create([
            'name'=> 'Grande',
            'slug'=> 'grande'
        ]);
        Category::create([
            'name'=> 'Emeralda',
            'slug'=> 'emeralda'
        ]);
        Category::create([
            'name'=> 'Aranthera',
            'slug'=> 'aranthera'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, dolore sequi. Necessitatibus doloremque deleniti laborum iusto! Mollitia veniam, facilis ab libero perspiciatis eaque labore harum. Cupiditate nostrum alias rem similique, dolorem magni rerum nemo quo non eius quas a nisi repellendus facilis optio odio? Sapiente, optio. Expedita assumenda eligendi repellendus earum temporibus atque laborum iste nam harum nihil quos eius eum, iure animi nostrum tempore mollitia delectus impedit maiores? Optio impedit eum animi consequatur ex nostrum aliquid velit nulla dolore quaerat beatae perspiciatis aspernatur excepturi dignissimos quis facere, est commodi delectus dolores maiores maxime quo laboriosam. Soluta pariatur quidem officia.',
        //     'category_id'  => 1,
        //     'user_id'=>1
        //   ]);
        //   Post::create([
        //     'title'=> 'Judul Kedua',
        //     'slug'=> 'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, dolore sequi. Necessitatibus doloremque deleniti laborum iusto! Mollitia veniam, facilis ab libero perspiciatis eaque labore harum. Cupiditate nostrum alias rem similique, dolorem magni rerum nemo quo non eius quas a nisi repellendus facilis optio odio? Sapiente, optio. Expedita assumenda eligendi repellendus earum temporibus atque laborum iste nam harum nihil quos eius eum, iure animi nostrum tempore mollitia delectus impedit maiores? Optio impedit eum animi consequatur ex nostrum aliquid velit nulla dolore quaerat beatae perspiciatis aspernatur excepturi dignissimos quis facere, est commodi delectus dolores maiores maxime quo laboriosam. Soluta pariatur quidem officia.',
        //     'category_id'  => 1,
        //     'user_id'=>1
        //   ]);
        //   Post::create([
        //     'title'=> 'Judul Ketiga',
        //     'slug'=> 'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, dolore sequi. Necessitatibus doloremque deleniti laborum iusto! Mollitia veniam, facilis ab libero perspiciatis eaque labore harum. Cupiditate nostrum alias rem similique, dolorem magni rerum nemo quo non eius quas a nisi repellendus facilis optio odio? Sapiente, optio. Expedita assumenda eligendi repellendus earum temporibus atque laborum iste nam harum nihil quos eius eum, iure animi nostrum tempore mollitia delectus impedit maiores? Optio impedit eum animi consequatur ex nostrum aliquid velit nulla dolore quaerat beatae perspiciatis aspernatur excepturi dignissimos quis facere, est commodi delectus dolores maiores maxime quo laboriosam. Soluta pariatur quidem officia.',
        //     'category_id'  => 2,
        //     'user_id'=>2
        //   ]);
    }
}
