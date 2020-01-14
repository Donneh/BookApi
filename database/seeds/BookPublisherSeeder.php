<?php

use Illuminate\Database\Seeder;

class BookPublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book_publisher = [
            [
                'publisher_id' => 1,
                'book_id' => 1
            ],
            [
                'publisher_id' => 2,
                'book_id' => 2
            ],
            [
                'publisher_id' => 3,
                'book_id' => 3
            ]
        ];

        DB::table('book_publisher')->insert($book_publisher);
    }
}
