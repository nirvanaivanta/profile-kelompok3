<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
       public function index()
    {
        $anggota = [
            ['nama' => 'Nirvana Ivanta Phalosa Jaya', 'nim' => '24104410053', 'peran' => 'Fullstack'],
            ['nama' => 'Cusnul Fitria', 'nim' => '456', 'peran' => 'Fullstack'],
            ['nama' => 'Mohammad Yusuf Jamil Al Karim', 'nim' => '24100410092', 'peran' => 'Fullstack'],
            ['nama' => 'Siti Rahmawati', 'nim' => '24104410009', 'peran' => 'Fullstack'],
        ];

        return view('about', compact('anggota'));
    }
}
