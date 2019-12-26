<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            'title' => 'Example Gallery',
            'image' => 'https://cdn.gramedia.com/uploads/items/img20190913_14323955_qUA9DUp__w414_hauto.jpg',
            'slug' => 'example-gallery'
        ]);
    }
}
