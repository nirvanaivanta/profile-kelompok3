<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        return view('home', [
            'namaWebsite' => 'Profile Kelompok 3',
            'tagline' => 'Website Profil Sederhana',
            'namaKelompok' => 'Kelompok 3',
            'semester' => 'Semester 4'
        ]);
    }
}
