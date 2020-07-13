<?php

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating categories element

        $category1 = Category::create([
            'name' => 'News',
            'namefr' => 'nouvautés'
        ]);

        $category2 = Category::create([
            'name' => 'Partnership',
            'namefr' => 'Partnership'
        ]);

        $category3 = Category::create([
            'name' => 'Marketing',
            'namefr' => 'Marketing'
        ]);

        $category4 = Category::create([
            'name' => 'inspection & controle',
            'namefr' => 'inspection & controle'
        ]);





        // creating tags element

        $tag1 = Tag::create([
            'tag' => "Job",
            'tagfr' => "Travail"
        ]);

        $tag2 = Tag::create([
            'tag' => 'inspection',
            'tagfr' => 'inspection'
        ]);

        $tag3 = Tag::create([
            'tag' => 'gaz & hydrcarbure',
            'tagfr' => 'gaz & hydrcarbure',
        ]);

        $tag4 = Tag::create([
            'tag' => 'rafinage',
            'tagfr' => 'rafinage',
        ]);

        $tag5 = Tag::create([
            'tag' => 'activités',
            'tagfr' => 'activtés'
        ]);

        // creating post element

        $post1 = Post::create([
            'title' => 'Recruiting Managerial Staff',
            'titlefr' => 'version française version française',
            'slug' => 'Recruiting Managerial Staff',
            'description' => 'To take a trivial example, which of us ever und takes laborious physical exercise, except to obtain some advantage from it... ',
            'descriptionfr' => 'version française version française version française version française version française version française version française...',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'contentfr' => "version française version française version française version française version française version française version française version française version française version française version française version française version française version française version française version française version française, version française version française version française. version française version française version française version française version française version française version française version française version française version française version française version française ver
version françaiseversion françaiseversion françaiseversion
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
version françaiseversion françaiseversion françaiseversion française.
version françaiseversion françaiseversion françaiseversion française
version françaiseversion françaiseversion françaiseversion françaiseversion françaiseversion françaiseversion françaiseversion françaiseversion françaiseversion françaiseversion",
            'category_id' => $category1->id,
            'featured' => 'uploads/posts/1.jpg',
            'user_id' => 1
        ]);

        $post2 = Post::create([
            'title' => 'Construction Investment Plan',
            'titlefr' => 'vfvfvfvf vfvfvfvf vfvfvfvf',
            'slug' => 'Construction Investment Plan',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... ',
            'descriptionfr' => 'vfvfvfvfvfvf vfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvfvf.. ',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'contentfr' => "vfvfvfvfvf vfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvf vfvfvfvf vfvfvfvfvfvfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvfvfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvfvfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf vfvfvfvfvf
vfvfvfvfvf vfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfv fvfvfvf
vfvfvf vfvfvfvfvfvfvfvfv fvfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvf.
vfvfv fvfvfvfvfvfvf vfvfvfvfvfvfv fvfvfvfvfvfvfv fvfvfvfvfvfvfvfvf vfvfvfvfvfvf vfvfvf.
vfvfvfvfvfv fvfvfvfvfvfvfvfvfvfvfvfvfv fvfvfvfvfvfvfvfvfvfvfvf vfvfvfvfvfvfvfvfvfvf.
vfvfvfvfvfvfvfvfvfvf example, vfvfvfvfvfvfvfvfvfvfvfvfvfvfvf laborious physical exercise, vfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvfvf who has any vfvfvfvfvf. ",
            'category_id' => $category4->id,
            'featured' => 'uploads/posts/2.jpg',
            'user_id' => 1
        ]);

        $post3 = Post::create([
            'title' => 'Company Link',
            'titlefr' => 'Company Link',
            'slug' => 'Company Link',
            'description' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus... ',
            'descriptionfr' => 'Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus... ',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'contentfr' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'category_id' => $category3->id,
            'featured' => 'uploads/posts/3.jpg',
            'user_id' => 1
        ]);

        $post4 = Post::create([
            'title' => 'It uses a dictionary of fdferetre',
            'titlefr' => 'It uses a dictionary of fdferetre',
            'slug' => 'It uses a dictionary of fdferetre',
            'description' => "If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text... ",
            'descriptionfr' => "If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text... ",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'contentfr' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'category_id' => $category2->id,
            'featured' => 'uploads/posts/1.jpg',
            'user_id' => 1
        ]);

        $post5 = Post::create([
            'title' => 'It uses a dictionary of hgjgjhghjg',
            'titlefr' => 'It uses a dictionary of hgjgjhghjg',
            'slug' => 'It uses a dictionary of hgjgjhghjg',
            'description' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structurest, sunt in culpa qui officia deserunt... ',
            'descriptionfr' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structurest, sunt in culpa qui officia deserunt... ',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'contentfr' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'category_id' => $category1->id,
            'featured' => 'uploads/posts/2.jpg',
            'user_id' => 1
        ]);

        $post6 = Post::create([
            'title' => 'It uses a dictionary of',
            'titlefr' => 'It uses a dictionary of',
            'slug' => 'It uses a dictionary of',
            'description' => 'To take a trivial example, which of us ever und takes laborious physical exercise, except to obtain some advantage from it... ',
            'descriptionfr' => 'To take a trivial example, which of us ever und takes laborious physical exercise, except to obtain some advantage from it... ',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'contentfr' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'category_id' => $category1->id,
            'featured' => 'uploads/posts/3.jpg',
            'user_id' => 1
        ]);

        $post7 = Post::create([
            'title' => 'Plan To Expand The Market',
            'titlefr' => 'Plan To Expand The Market',
            'slug' => 'Plan To Expand The Market',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... ',
            'descriptionfr' => 'Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... ',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'contentfr' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",

            'category_id' => $category1->id,
            'featured' => 'uploads/posts/11.jpg',
            'user_id' => 1
        ]);

        $post8 = Post::create([
            'title' => 'ipsum dolor sit amet, consectetur',
            'titlefr' => 'ipsum dolor sit amet, consectetur',
            'slug' => 'ipsum dolor sit amet, consectetur',
            'description' => "If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text... ",
            'descriptionfr' => "If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text... ",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'contentfr' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'category_id' => $category3->id,
            'featured' => 'uploads/posts/10.jpg',
            'user_id' => 1
        ]);

        $post9 = Post::create([
            'title' => 'reprehenderit in',
            'titlefr' => 'reprehenderit in',
            'slug' => 'reprehenderit in',
            'description' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structurest, sunt in culpa qui officia deserunt... ',
            'descriptionfr' => 'It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structurest, sunt in culpa qui officia deserunt... ',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'contentfr' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",

            'category_id' => $category2->id,
            'featured' => 'uploads/posts/3.jpg',
            'user_id' => 1
        ]);

        $post10 = Post::create([
            'title' => 'Job lmmlk',
            'titlefr' => 'Travail lmmlk',
            'slug' => 'Job lmmlk',
            'description' => "Send your CV and your motivation latter to this address :info@synergyindustry.net,  offre: which of us ever und takes laborious physical exercise, except to obtain some advantage from it... ",
            'descriptionfr' => "Envoyez vos CV et lettre de motivation à l'adresse suivante:info@synergyindustry.net,  offre: which of us ever und takes laborious physical exercise, except to obtain some advantage from it... ",
            'content' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'contentfr' => "Lorem ipsum dolor sit amet, consectetur adipis ing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing
Temporibus autem quibusdam et aut officiis debitis aut rerum
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man. ",
            'category_id' => $category1->id,
            'featured' => 'uploads/posts/11.jpg',
            'user_id' => 1
        ]);

        //Attach tag to posts

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag3->id, $tag4->id]);
        $post3->tags()->attach([$tag5->id, $tag1->id]);
        $post4->tags()->attach([$tag4->id, $tag5->id]);
        $post5->tags()->attach([$tag3->id, $tag5->id]);
        $post6->tags()->attach([$tag1->id, $tag2->id]);
        $post7->tags()->attach([$tag5->id, $tag2->id]);
        $post8->tags()->attach([$tag4->id, $tag1->id]);
        $post9->tags()->attach([$tag2->id, $tag4->id]);
        $post10->tags()->attach([$tag1->id, $tag2->id]);

    }

}
