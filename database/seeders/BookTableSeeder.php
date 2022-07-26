<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'category_id' => 1,
                'title' => 'Fiction 1',
            ],
            [
                'category_id' => 2,
                'title' => 'Science 1',
            ],
            [
                'category_id' => 3,
                'title' => 'Computer 1',
            ],
            [
                'category_id' => 1,
                'title' => 'Fiction 2',
            ],
            [
                'category_id' => 2,
                'title' => 'Science 2',
            ],
            [
                'category_id' => 3,
                'title' => 'Computer 2',
            ],
            [
                'category_id' => 1,
                'title' => 'Fiction 3',
            ],
            [
                'category_id' => 2,
                'title' => 'Science 3',
            ],
            [
                'category_id' => 3,
                'title' => 'Computer 3',
            ],
            [
                'category_id' => 1,
                'title' => 'Fiction 4',
            ],
        ]);
    }
}
