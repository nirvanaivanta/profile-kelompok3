<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $artikel = [
            [
                'judul' => 'Mysql',
                'gambar' => 'mysql.jpeg',
                'isi' => 'MySQL merupakan sistem manajemen basis data (database management system) yang digunakan untuk menyimpan dan mengelola data pada aplikasi web, sehingga data dapat diakses, diubah, dan dihapus dengan mudah dan terstruktur.'
            ],
            [
                'judul' => 'Laravel',
                'gambar' => 'laravel.jpeg',
                'isi' => 'Laravel merupakan framework berbasis PHP yang berfungsi untuk membantu pengembang dalam membangun aplikasi web secara lebih cepat dan terstruktur dengan menggunakan konsep MVC, serta menyediakan berbagai fitur seperti routing, manajemen database, dan autentikasi.'
            ],
            [
                'judul' => 'Tailwind CSS',
                'gambar' => 'tailwind.jpeg',
                'isi' => 'Tailwind CSS merupakan framework CSS yang digunakan untuk mempermudah dan mempercepat proses pembuatan tampilan antarmuka website dengan menyediakan berbagai class siap pakai, sehingga pengembang tidak perlu menulis CSS dari awal.'
            ]
        ];

        return view('blog', compact('artikel'));
    }
}
