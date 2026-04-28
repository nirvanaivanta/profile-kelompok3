<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function index()
    {
        $artikel = [
            [
                'judul' => 'Belajar Laravel',
                'penulis' => 'Andi',
                'tanggal' => '2026-04-01',
                'isi' => 'Laravel adalah framework PHP...'
            ],
            [
                'judul' => 'Belajar Tailwind',
                'penulis' => 'Budi',
                'tanggal' => '2026-04-02',
                'isi' => 'Tailwind adalah CSS utility...'
            ],
            [
                'judul' => 'MVC Concept',
                'penulis' => 'Citra',
                'tanggal' => '2026-04-03',
                'isi' => 'MVC adalah arsitektur...'
            ]
        ];

        return view('blog', compact('artikel'));
    }
}
