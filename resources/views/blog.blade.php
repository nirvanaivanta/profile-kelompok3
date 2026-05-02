@extends('layouts.app')

@section('content')
    <a href="/home"
        class="inline-block mb-6 bg-red-800 text-white px-3 py-1.5 text-sm rounded-md hover:bg-red-700 transition">
        ← Home
    </a>

    <div class="max-w-6xl mx-auto py-10 px-4">

        <!-- Judul -->
        <h1 class="text-2xl font-bold mb-4 text-red-800 text-center">
            Pembuatan Website Profile Sederhana
        </h1>
        <p class="text-black-700 mb-8 text-center leading leading-relaxed">
            Pembuatan website profile ini sebenarnya untuk memenuhi tugas pembelajaran Pemograman Web Lanjut,
            tujuan dari tugas ini yaitu untuk memahami pengembangan framework laravel dan taillwinds.
            Yang di mulai dari instalasi,konfigurasi dan implementasi. Pada website ini terdapat beberapa halaman utama
            seperti tombol navigasi home , about , blog dan contact.
            Dengan melalui project ini kami mendapatkan pembelajaran serta pengembangan suatu website secara
            terstruktur.

        </p>
        <!-- Grid Card -->
        <div class="grid md:grid-cols-3 gap-6">

            @foreach ($artikel as $item)
                <div class="bg-white rounded-xl shadow hover:shadow-lg transition">
                    <img src="https://via.placeholder.com/400x200" class="rounded-t-xl" alt="">

                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">
                            {{ $item['judul'] }}
                        </h2>

                        <img src="{{ asset('img/' . $item['gambar']) }}" width="70" class="me-2">

                        <p class="text-gray-600 text-sm">
                            {{ $item['isi'] }}
                        </p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
