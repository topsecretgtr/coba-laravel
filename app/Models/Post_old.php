<?php

namespace App\Models;

class Post
{
    private static $blog_posts=[
        [
            "title"=>"Judul Post Pertama",
            "slug"=>"judul-post-pertama",
            "author"=>"Andres",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ratione dolorum quaerat autem labore repellendus eveniet debitis saepe. Ipsam ullam vero est architecto vel. Facilis exercitationem aperiam incidunt! Qui omnis laudantium distinctio ea nihil! Deserunt blanditiis, molestias nemo, fugiat quis molestiae fuga, non itaque quam numquam suscipit! Modi vel nihil porro similique iusto soluta consequuntur, exercitationem animi adipisci quo vero accusamus, non repudiandae, laudantium itaque doloribus quod voluptatum hic dolores? Vel repellendus voluptates accusantium quasi debitis temporibus eaque, saepe eveniet?"
        ] ,
        [
            "title"=>"Judul Post Kedua",
            "slug"=>"judul-post-kedua",
            "author"=>"Grace",
            "body"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde dignissimos quos voluptas. Aspernatur odio sit eveniet nesciunt mollitia delectus quas fugit nihil voluptate nam. Ut deserunt quia voluptatum harum hic ab modi dolore. Eum quo doloribus iure, vero esse eius quia laboriosam corporis veniam mollitia possimus minus fuga enim. Quas maiores fugit est esse soluta porro. In quaerat saepe, exercitationem quod totam culpa repudiandae laboriosam commodi suscipit dicta quidem earum ducimus iure. Eligendi asperiores, at minus vitae esse hic rerum consectetur porro a accusantium quod expedita unde commodi. Assumenda ad voluptate, enim delectus totam consequuntur est eaque aspernatur architecto iusto."
        ],
        [
            "title"=>"Judul Post Ketiga",
            "slug"=>"judul-post-ketiga",
            "author"=>"Aiden",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit obcaecati amet fugit ad animi voluptatibus ipsa! Sit cupiditate eveniet ipsa quas, alias aliquam sequi nobis quos possimus sed iusto reiciendis dolores. Mollitia blanditiis incidunt ipsa voluptas, sequi dolores quia a, quo corrupti, temporibus quod quas deserunt saepe. Minima ab sint velit atque rerum, corrupti quia modi earum sequi officiis veniam nesciunt error recusandae quae laudantium doloremque, alias culpa magnam nemo. Corporis incidunt molestias numquam explicabo, rerum facere officia minus cum, voluptates repellendus voluptas dolorum alias et ea vel quas soluta illum. Dolor neque harum, ipsum architecto facilis ut consectetur cum, inventore laboriosam totam voluptates sint ullam fugit, vel voluptate impedit eligendi quia praesentium. Consequatur similique accusantium dolorum voluptas! Error voluptatem magni minima quibusdam quae expedita consequatur libero aspernatur nihil? Deserunt eaque, culpa recusandae repudiandae itaque velit eum asperiores, voluptatem veritatis optio quia numquam quasi omnis atque error alias eligendi. Excepturi?"
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
