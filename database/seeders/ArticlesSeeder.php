<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => Str::random(10),
            'text' => Str::random(10),
            'picture' => Str::random(10).'jpg',
        ]);
    }
}
