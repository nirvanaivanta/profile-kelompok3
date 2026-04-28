@extends('layouts.app')

@section('content')

    <a href="/home" class="inline-block mb-6 bg-red-800 text-white px-3 py-1.5 text-sm rounded-md hover:bg-red-700 transition">
        ← Home
    </a>

    <h1 class="text-2xl font-bold mb-4 text-red-800 text-center">About Us</h1>

    <p class="text-center text-gray-600 max-w-2xl mx-auto mb-10">
        {{ $deskripsiKelompok }}
    </p>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($anggota as $a)
            <div class="bg-white rounded-xl shadow-md p-5 hover:shadow-lg transition">
                
                <div class="w-12 h-12 bg-red-100 text-red-800 flex items-center justify-center rounded-full mb-3 font-bold">
                    {{ strtoupper(substr($a['nama'], 0, 1)) }}
                </div>

                <h2 class="text-lg font-semibold">{{ $a['nama'] }}</h2>
                <p class="text-sm text-gray-500">{{ $a['nim'] }}</p>

                <span class="inline-block mt-2 text-xs bg-red-100 text-red-700 px-2 py-1 rounded-full">
                    {{ $a['peran'] }}
                </span>

                <p class="text-sm text-gray-600 mt-3">
                    {{ $a['deskripsi'] }}
                </p>

            </div>
        @endforeach
    </div>

@endsection