<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Judul 1',
                'body' => 'isi body 1'
            ],
            [
                'title' => 'Judul 2',
                'body' => 'isi body 2'
            ]
            ];

            DB::table('posts')->insert($posts);

        }
}
