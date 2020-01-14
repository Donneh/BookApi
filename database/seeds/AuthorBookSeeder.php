<?php

use Illuminate\Database\Seeder;

class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author_book = [
            [
                'author_id' => 1,
                'book_id' => 1
            ],
            [
                'author_id' => 2,
                'book_id' => 2
            ],
            [
                'author_id' => 3,
                'book_id' => 3
            ]
        ];

        DB::table('author_book')->insert($author_book);
    }
}
