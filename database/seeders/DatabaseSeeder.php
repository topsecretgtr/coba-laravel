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
            'name'=>'Andres Ang',
            'username'=>'andresang',
            'email'=>'andres@gmail.com',
            'password'=>bcrypt('password')
        ]);
        User::factory(5)->create();       

        // User::create([
        //     'name'=>'Grace',
        //     'username'=>'grace',
        //     'email'=>'grace@gmail.com',
        //     'password'=>bcrypt('654321')
        // ]);
        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);
        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);
        Post::factory(20)->create();
        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium odit ea quod! Aspernatur ex cupiditate officia quis itaque tenetur et maiores mollitia cum!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium odit ea quod! Aspernatur ex cupiditate officia quis itaque tenetur et maiores mollitia cum! Non tempora nam, ipsam molestias harum alias maxime illum, nostrum earum rem placeat sed, animi deserunt sint totam distinctio accusantium voluptas ducimus cupiditate a qui.</p><p> Dolorem modi molestiae tempore qui cumque minima. Quia corrupti quisquam iure voluptatum nostrum magni incidunt quis totam id asperiores voluptates repellat, iusto laboriosam minima voluptatem sint voluptas nulla libero molestiae harum earum adipisci animi fuga fugiat! Unde doloribus doloremque in, nesciunt voluptatem aut quod fugiat. Suscipit voluptatibus similique, perspiciatis accusantium earum labore.</p>',
        //     'category_id'=>'1',
        //     'user_id'=>'1'
        // ]);
        // Post::create([
        //     'title'=>'Judul Ke Dua',
        //     'slug'=>'judul-ke-dua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium odit ea quod! Aspernatur ex cupiditate officia quis itaque tenetur et maiores mollitia cum!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium odit ea quod! Aspernatur ex cupiditate officia quis itaque tenetur et maiores mollitia cum! Non tempora nam, ipsam molestias harum alias maxime illum, nostrum earum rem placeat sed, animi deserunt sint totam distinctio accusantium voluptas ducimus cupiditate a qui.</p><p> Dolorem modi molestiae tempore qui cumque minima. Quia corrupti quisquam iure voluptatum nostrum magni incidunt quis totam id asperiores voluptates repellat, iusto laboriosam minima voluptatem sint voluptas nulla libero molestiae harum earum adipisci animi fuga fugiat! Unde doloribus doloremque in, nesciunt voluptatem aut quod fugiat. Suscipit voluptatibus similique, perspiciatis accusantium earum labore.</p>',
        //     'category_id'=>'1',
        //     'user_id'=>'1'
        // ]);
        // Post::create([
        //     'title'=>'Judul Ke Tiga',
        //     'slug'=>'judul-ke-tiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium odit ea quod! Aspernatur ex cupiditate officia quis itaque tenetur et maiores mollitia cum!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium odit ea quod! Aspernatur ex cupiditate officia quis itaque tenetur et maiores mollitia cum! Non tempora nam, ipsam molestias harum alias maxime illum, nostrum earum rem placeat sed, animi deserunt sint totam distinctio accusantium voluptas ducimus cupiditate a qui.</p><p> Dolorem modi molestiae tempore qui cumque minima. Quia corrupti quisquam iure voluptatum nostrum magni incidunt quis totam id asperiores voluptates repellat, iusto laboriosam minima voluptatem sint voluptas nulla libero molestiae harum earum adipisci animi fuga fugiat! Unde doloribus doloremque in, nesciunt voluptatem aut quod fugiat. Suscipit voluptatibus similique, perspiciatis accusantium earum labore.</p>',
        //     'category_id'=>'2',
        //     'user_id'=>'1'
        // ]);
        // Post::create([
        //     'title'=>'Judul Ke Empat',
        //     'slug'=>'judul-ke-empat',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium odit ea quod! Aspernatur ex cupiditate officia quis itaque tenetur et maiores mollitia cum!',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium odit ea quod! Aspernatur ex cupiditate officia quis itaque tenetur et maiores mollitia cum! Non tempora nam, ipsam molestias harum alias maxime illum, nostrum earum rem placeat sed, animi deserunt sint totam distinctio accusantium voluptas ducimus cupiditate a qui.</p><p> Dolorem modi molestiae tempore qui cumque minima. Quia corrupti quisquam iure voluptatum nostrum magni incidunt quis totam id asperiores voluptates repellat, iusto laboriosam minima voluptatem sint voluptas nulla libero molestiae harum earum adipisci animi fuga fugiat! Unde doloribus doloremque in, nesciunt voluptatem aut quod fugiat. Suscipit voluptatibus similique, perspiciatis accusantium earum labore.</p>',
        //     'category_id'=>'2',
        //     'user_id'=>'2'
        // ]);
    }
}
