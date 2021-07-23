<?php

use Illuminate\Database\Seeder;
use App\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {

            // creazione istanza
            $newPost = new Post();

            //valorizzazione proprietà
            $newPost->title = "Titolo articolo " . $i;
            $newPost->content = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil numquam, praesentium, quos possimus dolorum, totam optio dolores eveniet cupiditate incidunt laudantium? Numquam placeat fugiat magni aspernatur non illo pariatur hic amet optio aliquam doloribus quam, molestias adipisci beatae libero sequi possimus quis praesentium? Ea molestias nisi, architecto sapiente doloremque facilis repellendus optio magni enim, voluptatibus, totam veritatis sunt assumenda suscipit mollitia expedita ab necessitatibus. Eius repellat sint, dignissimos minus hic voluptatem molestias perferendis delectus nam fugit tempora consequuntur alias ipsum, earum omnis deleniti beatae, sapiente quibusdam. Temporibus et, at autem possimus rerum tenetur deleniti sapiente consectetur velit, itaque maiores delectus!";
            $newPost->slug = Str::slug($newPost->title,'-');

            // salvataggio a db
            $newPost->save();

        }
    }
}