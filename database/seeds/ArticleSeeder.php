<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $authors = [
                    ['name'=>'Jorge Gutierrez','url'=>'jorgegut@gmail.com'],
                    ['name'=>'Rosa Aguiar','url'=>'https://www.linkedin.com/in/rosacatraio/']
        ];

        foreach ($authors as $author) {
            DB::table('authors')
            ->insert([
                'name' => $author['name'],
                'url' => $author['url'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        $total_authors = count($author);

        $articles = ['First Post','Second Post','Third post'];

        foreach ($articles as $article) {
            DB::table('articles')
            ->insert([
                'title' => $article,
                'url' => str_slug($article,'-'),
                'author_id' => rand(1,$total_authors),
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique perspiciatis optio ipsum hic voluptatem placeat nulla corrupti quaerat illum, doloremque veniam voluptatibus id temporibus, earum recusandae fugiat! Libero porro fugit accusamus omnis rerum eos iusto sint quisquam, similique aperiam veniam ratione voluptate. Ipsam, dolorem! Esse, veritatis! Quas minima ipsa et quia magni, nihil placeat repellendus asperiores sunt laborum hic qui voluptate id dolores! Nostrum sunt dignissimos harum dolore voluptatibus dicta dolorum eveniet? Quibusdam dolore possimus quisquam cum iste repellendus perferendis, illo enim quia nisi magni officiis error doloribus fuga consectetur voluptas inventore amet labore provident nesciunt asperiores fugit est assumenda suscipit. Distinctio, voluptates. Facere est, tempore blanditiis consectetur reprehenderit obcaecati neque, repudiandae error qui maxime saepe! Impedit accusamus nesciunt qui! Non aliquam vero voluptas, molestiae id provident dolor odit consequatur cum eveniet accusantium explicabo molestias, labore quae eum repudiandae, voluptates ducimus? Aperiam quaerat commodi, doloribus voluptate rerum sequi exercitationem similique ab accusantium modi autem pariatur in cumque obcaecati suscipit laboriosam amet error ratione officiis at ut sed molestiae! Minima aut reprehenderit veniam eveniet quaerat, odit nulla, nam autem officiis repudiandae aliquam aliquid facilis sint harum? Unde reiciendis ad explicabo ratione, aliquid voluptatem eaque maxime. Minus, dicta? Sapiente molestiae ducimus fugit dolores repudiandae sequi, delectus officiis ipsa omnis assumenda nisi facere id. Quisquam quam sint vitae delectus quis quas odio esse error suscipit eos optio, libero nesciunt culpa porro eum rerum in aut. Nulla assumenda autem maxime odit blanditiis. Maiores ipsam quos amet excepturi? Sed, voluptas quas odio qui ducimus earum.',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}

