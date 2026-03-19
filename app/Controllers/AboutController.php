<?php

require_once BASE_PATH . '/app/Core/Controller.php';

class AboutController extends Controller
{
    public function index()
    {
         $data = [
            'title' => 'Home',
            'message' => 'Selamat datang di Mini MVC',
            'berita' => [
                
[
    'judul' => 'Mahasiswa ITB Kembangkan AI Bantu Industri Migas Hemat Jutaan Dolar dan Ambil Keputusan Lebih CepatUtama',
    'image' => 'kegiatan1.webp',
    'tag' => 'utama'
],
[
    'judul'=> 'Penentuan 1 Syawal 1447 H, Observatorium Bosscha ITB Sampaikan Informasi Astronomis',
    'image' => 'kegiatan2.webp',
    'tag' => 'utama'
],
[
    'judul' => 'Maha Gotra Ganesha ITB: Merawat Budaya Bali di Kampus',
    'image' => 'kegiatan3.webp',
    'tag' => 'baru'
],
[
    'judul' => 'Kolaborasi Herbarium Bandungense SITH ITB dan Tim Peneliti Ungkap Spesies Baru Homalomena bungamerah dari Sumatra',
    'image' => 'kegiatan1.webp',
    'tag' => 'baru'
    ]
]
        ];

        $this->view('about/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'description' => 'Ini adalah halaman tentang Mini MVC yang kita bangun.'
        ];

        $this->view('home/index', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'email' => 'admin@minimvc.local'
        ];

        $this->view('home/index', $data);
    }
}