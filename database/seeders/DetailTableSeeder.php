<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            [
                'book_id' => '1',
                'author' => 'Someone Who Cares',
                'publisher' => 'Gramedoi inc.',
                'year' => '2001',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'book_id' => '2',
                'author' => 'Someone Who Cares',
                'publisher' => 'Gramedoi inc.',
                'year' => '2002',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'book_id' => '3',
                'author' => 'Someone Who Cares',
                'publisher' => 'Gramedoi inc.',
                'year' => '2003',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'book_id' => '4',
                'author' => 'Someone Who Cares',
                'publisher' => 'Gramedoi inc.',
                'year' => '2004',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'book_id' => '5',
                'author' => 'Someone Who Cares',
                'publisher' => 'Gramedoi inc.',
                'year' => '2005',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'book_id' => '6',
                'author' => 'Someone Who Cares',
                'publisher' => 'Gramedoi inc.',
                'year' => '2006',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'book_id' => '7',
                'author' => 'Someone Who Cares',
                'publisher' => 'Gramedoi inc.',
                'year' => '2007',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'book_id' => '8',
                'author' => 'Someone Who Cares',
                'publisher' => 'Gramedoi inc.',
                'year' => '2008',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'book_id' => '9',
                'author' => 'Someone Who Cares',
                'publisher' => 'Gramedoi inc.',
                'year' => '2009',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
            [
                'book_id' => '10',
                'author' => 'Someone Who Cares',
                'publisher' => 'Tenth',
                'year' => '2010',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero maiores distinctio iusto adipisci pariatur iure quam amet debitis commodi impedit eum natus, ducimus est consequuntur rem eveniet eos error? Quas.',
            ],
        ]);
    }
}
