<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
      public function index()
        {
            $deskripsiKelompok = "Kelompok 3 adalah tim yang berfokus pada pengembangan web sederhana menggunakan Laravel dan TailwindCSS. Kami berkolaborasi untuk membangun tampilan yang clean, responsive, dan mudah digunakan.";

            $anggota = [
                [
                    'nama' => 'Nirvana Ivanta Phalosa Jaya',
                    'nim' => '24104410053',
                    'peran' => 'Fullstack',
                    'deskripsi' => 'Nirvana adalah developer yang fokus pada pengembangan frontend dan backend dengan pendekatan clean code.'
                ],
                [
                    'nama' => 'Cusnul Fitria',
                    'nim' => '456',
                    'peran' => 'Fullstack',
                    'deskripsi' => 'Cusnul memiliki minat dalam desain UI dan implementasi fitur interaktif pada website.'
                ],
                [
                    'nama' => 'Mohammad Yusuf Jamil Al Karim',
                    'nim' => '24100410092',
                    'peran' => 'Fullstack',
                    'deskripsi' => 'Yusuf berperan dalam pengolahan logika backend serta integrasi antar komponen aplikasi.'
                ],
                [
                    'nama' => 'Siti Rahmawati',
                    'nim' => '24104410009',
                    'peran' => 'Fullstack',
                    'deskripsi' => 'Rahma fokus pada pengujian dan memastikan tampilan aplikasi tetap responsif di berbagai perangkat.'
                ],
            ];

            return view('about', compact('anggota', 'deskripsiKelompok'));
        }
}
