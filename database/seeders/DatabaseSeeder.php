<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
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
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // User::create([
        //     'name' => 'M Alvi Nurhidayah',
        //     'email' => 'alvinurhidayah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Faikar Abdillah',
        //     'email' => 'faikar@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt voluptas expedita temporibus aliquid. Nihil eius sequi molestiae iusto vel mollitia accusantium magnam minima, minus, necessitatibus corrupti explicabo repellat commodi delectus nam repellendus nesciunt',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt voluptas expedita temporibus aliquid. Nihil eius sequi molestiae iusto vel mollitia accusantium magnam minima, minus, necessitatibus corrupti explicabo repellat commodi delectus nam repellendus nesciunt expedita nobis ullam distinctio at facilis porro beatae? Quas distinctio dolorum perferendis deserunt quasi explicabo, repudiandae dolorem dolores deleniti veniam dignissimos odio culpa placeat ipsam nemo et aspernatur iusto. Sed placeat est minus blanditiis reiciendis voluptatem, eaque et earum, assumenda tempora aliquid, aliquam at impedit voluptate quidem ad velit culpa deserunt nostrum! Vitae iusto natus optio error, non impedit officia, architecto ipsa quidem nihil alias porro vel.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt voluptas expedita temporibus aliquid. Nihil eius sequi molestiae iusto vel mollitia accusantium magnam minima, minus, necessitatibus corrupti explicabo repellat commodi delectus nam repellendus nesciunt',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt voluptas expedita temporibus aliquid. Nihil eius sequi molestiae iusto vel mollitia accusantium magnam minima, minus, necessitatibus corrupti explicabo repellat commodi delectus nam repellendus nesciunt expedita nobis ullam distinctio at facilis porro beatae? Quas distinctio dolorum perferendis deserunt quasi explicabo, repudiandae dolorem dolores deleniti veniam dignissimos odio culpa placeat ipsam nemo et aspernatur iusto. Sed placeat est minus blanditiis reiciendis voluptatem, eaque et earum, assumenda tempora aliquid, aliquam at impedit voluptate quidem ad velit culpa deserunt nostrum! Vitae iusto natus optio error, non impedit officia, architecto ipsa quidem nihil alias porro vel.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt voluptas expedita temporibus aliquid. Nihil eius sequi molestiae iusto vel mollitia accusantium magnam minima, minus, necessitatibus corrupti explicabo repellat commodi delectus nam repellendus nesciunt',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt voluptas expedita temporibus aliquid. Nihil eius sequi molestiae iusto vel mollitia accusantium magnam minima, minus, necessitatibus corrupti explicabo repellat commodi delectus nam repellendus nesciunt expedita nobis ullam distinctio at facilis porro beatae? Quas distinctio dolorum perferendis deserunt quasi explicabo, repudiandae dolorem dolores deleniti veniam dignissimos odio culpa placeat ipsam nemo et aspernatur iusto. Sed placeat est minus blanditiis reiciendis voluptatem, eaque et earum, assumenda tempora aliquid, aliquam at impedit voluptate quidem ad velit culpa deserunt nostrum! Vitae iusto natus optio error, non impedit officia, architecto ipsa quidem nihil alias porro vel.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt voluptas expedita temporibus aliquid. Nihil eius sequi molestiae iusto vel mollitia accusantium magnam minima, minus, necessitatibus corrupti explicabo repellat commodi delectus nam repellendus nesciunt',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt voluptas expedita temporibus aliquid. Nihil eius sequi molestiae iusto vel mollitia accusantium magnam minima, minus, necessitatibus corrupti explicabo repellat commodi delectus nam repellendus nesciunt expedita nobis ullam distinctio at facilis porro beatae? Quas distinctio dolorum perferendis deserunt quasi explicabo, repudiandae dolorem dolores deleniti veniam dignissimos odio culpa placeat ipsam nemo et aspernatur iusto. Sed placeat est minus blanditiis reiciendis voluptatem, eaque et earum, assumenda tempora aliquid, aliquam at impedit voluptate quidem ad velit culpa deserunt nostrum! Vitae iusto natus optio error, non impedit officia, architecto ipsa quidem nihil alias porro vel.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
