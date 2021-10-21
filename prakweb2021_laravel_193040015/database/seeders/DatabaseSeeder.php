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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Sandhika Galih',
            'email' => 'sandhikagalih@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Doddy Ferdiansyah',
            'email' => 'doddy@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis optio aperiam suscipit unde doloribus ipsam nemo velit voluptatem ipsum sint ea,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis optio aperiam suscipit unde doloribus ipsam nemo velit voluptatem ipsum sint ea, doloremque minus dicta consectetur hic reiciendis animi voluptates accusantium impedit soluta a ad! Natus aperiam inventore, fugit optio velit sit ipsa deserunt explicabo totam est repudiandae neque minima ad voluptates? Voluptatibus commodi fugit placeat reprehenderit corporis, reiciendis necessitatibus vel quae neque quod temporibus cupiditate eveniet, dolore autem odit, maxime laboriosam doloribus earum tempora maiores mollitia. Alias deleniti soluta, at maiores nisi molestiae autem vel nostrum consequuntur temporibus, dolores veniam unde voluptatem laudantium esse distinctio quasi totam. Incidunt, amet blanditiis!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis optio aperiam suscipit unde doloribus ipsam nemo velit voluptatem ipsum sint ea,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis optio aperiam suscipit unde doloribus ipsam nemo velit voluptatem ipsum sint ea, doloremque minus dicta consectetur hic reiciendis animi voluptates accusantium impedit soluta a ad! Natus aperiam inventore, fugit optio velit sit ipsa deserunt explicabo totam est repudiandae neque minima ad voluptates? Voluptatibus commodi fugit placeat reprehenderit corporis, reiciendis necessitatibus vel quae neque quod temporibus cupiditate eveniet, dolore autem odit, maxime laboriosam doloribus earum tempora maiores mollitia. Alias deleniti soluta, at maiores nisi molestiae autem vel nostrum consequuntur temporibus, dolores veniam unde voluptatem laudantium esse distinctio quasi totam. Incidunt, amet blanditiis!',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis optio aperiam suscipit unde doloribus ipsam nemo velit voluptatem ipsum sint ea,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis optio aperiam suscipit unde doloribus ipsam nemo velit voluptatem ipsum sint ea, doloremque minus dicta consectetur hic reiciendis animi voluptates accusantium impedit soluta a ad! Natus aperiam inventore, fugit optio velit sit ipsa deserunt explicabo totam est repudiandae neque minima ad voluptates? Voluptatibus commodi fugit placeat reprehenderit corporis, reiciendis necessitatibus vel quae neque quod temporibus cupiditate eveniet, dolore autem odit, maxime laboriosam doloribus earum tempora maiores mollitia. Alias deleniti soluta, at maiores nisi molestiae autem vel nostrum consequuntur temporibus, dolores veniam unde voluptatem laudantium esse distinctio quasi totam. Incidunt, amet blanditiis!',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis optio aperiam suscipit unde doloribus ipsam nemo velit voluptatem ipsum sint ea,',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis optio aperiam suscipit unde doloribus ipsam nemo velit voluptatem ipsum sint ea, doloremque minus dicta consectetur hic reiciendis animi voluptates accusantium impedit soluta a ad! Natus aperiam inventore, fugit optio velit sit ipsa deserunt explicabo totam est repudiandae neque minima ad voluptates? Voluptatibus commodi fugit placeat reprehenderit corporis, reiciendis necessitatibus vel quae neque quod temporibus cupiditate eveniet, dolore autem odit, maxime laboriosam doloribus earum tempora maiores mollitia. Alias deleniti soluta, at maiores nisi molestiae autem vel nostrum consequuntur temporibus, dolores veniam unde voluptatem laudantium esse distinctio quasi totam. Incidunt, amet blanditiis!',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
