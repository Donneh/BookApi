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
                'title' => 'His Dark Materials',
                'description' => "
                    These thrilling adventures tell the story of Lyra and Will—two ordinary children on a perilous
                    journey through shimmering haunted otherworlds. They will meet witches and armored bears, fallen
                    angels and soul-eating specters. And in the end, the fate of both the living—and the dead—will
                    rely on them.",
                'publish_date' => '2003-09-23'
            ],
            [
                'title' => 'Ready Player One',
                'description' => "
                    IN THE YEAR 2044, reality is an ugly place. The only time teenage Wade Watts really feels alive
                    is when he\'s jacked into the virtual utopia known as the OASIS. Wade\'s devoted his life to
                    studying the puzzles hidden within this world\'s digital confines, puzzles that are based on their
                    creator\'s obsession with the pop culture of decades past and that promise massive power and
                    fortune to whoever can unlock them.

                    But when Wade stumbles upon the first clue, he finds himself beset by players willing to kill to
                    take this ultimate prize. The race is on, and if Wade\'s going to survive, he\'ll have to win—and
                    confront the real world he\'s always been so desperate to escape.
                ",
                "publish_date" => "2011-06-16"
            ],
            [
                'title' => 'Six of Crows',
                'description' => "
                    Ketterdam: a bustling hub of international trade where anything can be had for the right
                    price—and no one knows that better than criminal prodigy Kaz Brekker. Kaz is offered a chance at a
                    deadly heist that could make him rich beyond his wildest dreams. But he can’t pull it off
                    alone...
                ",
                'publish_date' => "2015-09-29"
            ]
        ];

        DB::table('books')->insert($books);
    }
}
