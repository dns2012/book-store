<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $book  = [
            [
                'image' => 'https://cdn.gramedia.com/uploads/items/img20190913_14323955_qUA9DUp__w414_hauto.jpg',
                'title' => 'KKN Desa Penari',
                'author' => 'SIMPLEMAN',
                'price' => 65450
            ],
            [
                'image' => 'https://cdn.gramedia.com/uploads/items/9786023948680_buku-aktivitas-si-kecil_dunia-anak__w200_hauto.jpg',
                'title' => 'Buku Aktivitas Si Kecil : Dunia Anak',
                'author' => 'Rebecca Gilpin',
                'price' => 75000
            ],
            [
                'image' => 'https://cdn.gramedia.com/uploads/items/9786230005879_Cov_Conan_96__w200_hauto.jpg',
                'title' => 'Detektif Conan 96',
                'author' => 'Aoyama Gosho',
                'price' => 20000
            ],
            [
                'image' => 'https://cdn.gramedia.com/uploads/items/9786024557362_PP-RI-NO.16-T__w200_hauto.jpg',
                'title' => 'PP NO 16 Tahun 2018 Tentang Pengadaan',
                'author' => 'Tim Redaksi BIP',
                'price' => 29000
            ],
            [
                'image' => 'https://cdn.gramedia.com/uploads/items/9786237211280__w200_hauto.jpg',
                'title' => 'How Could?',
                'author' => 'Asabell Audida',
                'price' => 84575
            ],
            [
                'image' => 'https://cdn.gramedia.com/uploads/items/9786020500256-_Unexpected-Relationshop__w200_hauto.jpg',
                'title' => 'Unexpected Relationship',
                'author' => 'Febriani Ad.',
                'price' => 60000
            ],
            [
                'image' => 'https://cdn.gramedia.com/uploads/images/1/41495/big_covers/ID_GRAS2018MTH02HYUN__w200_hauto.jpg',
                'title' => 'Hyung',
                'author' => 'Mega Marcelina',
                'price' => 65000
            ],
            [
                'image' => 'https://cdn.gramedia.com/uploads/items/9786024529048_boys_do_write_love_letters__w200_hauto.jpg',
                'title' => 'Boys do Write Love Letters',
                'author' => 'Kansa Airlangga',
                'price' => 59000
            ],
        ];
        return view('frontend.home.index', [
            'book' => $book
        ]);
    }
}
