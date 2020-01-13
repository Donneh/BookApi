<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            [
                'name' => 'Philip Pullman'
            ],
            [
                'name' => 'Ernest Cline'
            ],
            [
                'name' => 'Leigh Bardugo'
            ]
        ];

        DB::table('authors')->insert($authors);
    }
}
