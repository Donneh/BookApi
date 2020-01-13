<?php

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publishers = [
            [
                'name' => 'Scholastic'
            ],
            [
                'name' => 'Random House'
            ],
            [
                'name' => 'Henry Holt and Company'
            ]
        ];

        DB::table('publishers')->insert($publishers);

    }
}
