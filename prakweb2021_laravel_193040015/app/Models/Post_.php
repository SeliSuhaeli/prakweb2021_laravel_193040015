<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
