<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $hero = [
            'judul' => 'Hubungi Kami',
            'subjudul' => 'Silakan kirim pesan atau pertanyaan Anda'
        ];

        $kontak = [
            'email' => 'kelompok3@gmail.com',
            'telepon' => '0812-3456-7890',
            'alamat' => 'Blitar, Indonesia',
            'deskripsi' => 'Jika ada pertanyaan terkait website atau proyek ini, silakan hubungi kami melalui form atau kontak di samping.'
        ];

        return view('contact', compact('hero', 'kontak'));
    }
}
