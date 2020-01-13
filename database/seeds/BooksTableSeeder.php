<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'Philip Pullman',
                'author_id' => 1,
                'publisher_id' => 1
            ],
            [
                'title' => 'Ernest Cline',
                'author_id' => 2,
                'publisher_id' => 2
            ],
            [
                'title' => 'Leigh Bardugo',
                'author_id' => 3,
                'publisher_id' => 3
            ]
        ];

        DB::table('books')->insert($books);
    }
}
