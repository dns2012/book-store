<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'category_id' => 1,
            'title' => 'Example Book',
            'description' => 'Description Book',
            'price' => 65450,
            'image' => 'https://cdn.gramedia.com/uploads/items/img20190913_14323955_qUA9DUp__w414_hauto.jpg',
            'slug' => 'example-job-book'
        ]);
    }
}
