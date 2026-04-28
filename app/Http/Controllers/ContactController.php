<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $anggota = [
            [
                'nama' => 'Nirvana Ivanta Phalosa Jaya',
                'nim' => '24104410053',
                'peran' => 'Fullstack',
                'email' => 'nirvana@email.com',
                'instagram' => '@nirvana',
                'github' => 'github.com/nirvana',
                'linkedin' => 'linkedin.com/in/nirvana'
            ],
            [
                'nama' => 'Cusnul Fitria',
                'nim' => '456',
                'peran' => 'Fullstack',
                'email' => 'cusnul@email.com',
                'instagram' => '@cusnul',
                'github' => 'github.com/cusnul',
                'linkedin' => 'linkedin.com/in/cusnul'
            ],
            [
                'nama' => 'Mohammad Yusuf Jamil Al Karim',
                'nim' => '24100410092',
                'peran' => 'Fullstack',
                'email' => 'yusuf@email.com',
                'instagram' => '@yusuf',
                'github' => 'github.com/yusuf',
                'linkedin' => 'linkedin.com/in/yusuf'
            ],
            [
                'nama' => 'Siti Rahmawati',
                'nim' => '24104410009',
                'peran' => 'Fullstack',
                'email' => 'rahma@email.com',
                'instagram' => '@rahma',
                'github' => 'github.com/rahma',
                'linkedin' => 'linkedin.com/in/rahma'
            ]
        ];

        return view('contact', compact('anggota'));
    }
}
