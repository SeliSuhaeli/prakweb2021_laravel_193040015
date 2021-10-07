<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Sandhika Galih",
        "email" => "sandhikagalih@unpas.ac.id",
        "image" => "sandhika.jpeg"
    ]);
});

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, aperiam! Quia quaerat totam amet eaque nobis, qui soluta voluptatibus suscipit aspernatur dignissimos repellendus molestias consequatur deserunt quos sunt ab impedit incidunt voluptatem illum repellat quas natus. Error in illo nostrum repellat quo architecto officia maiores quas, a, tempore modi explicabo officiis fugit veritatis temporibus culpa pariatur fugiat tempora commodi ex quibusdam laboriosam iusto optio alias? Aliquid, eaque a. Cupiditate rerum magni distinctio voluptate numquam ratione quisquam eum vitae minima culpa."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius cum incidunt illo molestias, amet at quos mollitia soluta fugiat totam. Nesciunt possimus fugit enim ex quidem et nihil! Deserunt iste at quo, saepe rerum sint debitis repudiandae dolorem nostrum odio quas ab architecto animi, molestiae omnis, minus harum atque ea? Odio quod eveniet accusamus soluta minima nam, ad officia corrupti itaque sunt totam aperiam, deserunt, possimus cupiditate illum voluptatibus beatae iure quia suscipit! Reprehenderit blanditiis pariatur odio. Aliquam consectetur quod vel, aliquid blanditiis impedit laboriosam in debitis inventore, repellat iusto consequuntur tenetur maiores numquam libero quibusdam perspiciatis eveniet aut est?"
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, aperiam! Quia quaerat totam amet eaque nobis, qui soluta voluptatibus suscipit aspernatur dignissimos repellendus molestias consequatur deserunt quos sunt ab impedit incidunt voluptatem illum repellat quas natus. Error in illo nostrum repellat quo architecto officia maiores quas, a, tempore modi explicabo officiis fugit veritatis temporibus culpa pariatur fugiat tempora commodi ex quibusdam laboriosam iusto optio alias? Aliquid, eaque a. Cupiditate rerum magni distinctio voluptate numquam ratione quisquam eum vitae minima culpa."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius cum incidunt illo molestias, amet at quos mollitia soluta fugiat totam. Nesciunt possimus fugit enim ex quidem et nihil! Deserunt iste at quo, saepe rerum sint debitis repudiandae dolorem nostrum odio quas ab architecto animi, molestiae omnis, minus harum atque ea? Odio quod eveniet accusamus soluta minima nam, ad officia corrupti itaque sunt totam aperiam, deserunt, possimus cupiditate illum voluptatibus beatae iure quia suscipit! Reprehenderit blanditiis pariatur odio. Aliquam consectetur quod vel, aliquid blanditiis impedit laboriosam in debitis inventore, repellat iusto consequuntur tenetur maiores numquam libero quibusdam perspiciatis eveniet aut est?"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post

    ]);
});
