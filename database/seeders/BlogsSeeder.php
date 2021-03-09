<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
                'title' => 'The Key to Creative Work is Knowing When to Walk Away',
                'slug' => 'the-key-to-creative-work-is-knowing-when-to-walk-away',
                'category' => 'CREATIVE',
                'image' => 'images/blog/blog-header-image.jpg',
                'content' => '',
                'draft' => 0
                ]);
    }
}
