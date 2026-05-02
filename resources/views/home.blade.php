@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div style="background: #800000; color: white; padding: 60px 0; text-align: center; margin-bottom: 30px;">
    <h1 style="font-size: 2.5rem; margin-bottom: 10px;">Selamat Datang</h1>
    <p style="font-size: 1.2rem; opacity: 0.9;">Daftar Profil Anggota Kelompok 3</p>
</div>

<div class="container" style="max-width: 1100px; margin: auto; padding: 0 20px; font-family: 'Segoe UI', sans-serif;">
    
    <!-- Informasi Utama -->
    <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-bottom: 40px;">
        <div style="flex: 1; min-width: 300px; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); border-top: 4px solid #800000;">
            <h3 style="color: #800000; margin-top: 0; padding-bottom: 10px; border-bottom: 1px solid #eee;">Detail Proyek</h3>
            <ul style="list-style: none; padding: 0; line-height: 2;">
                <li><strong>Website:</strong> {{ $namaWebsite }}</li>
                <li><strong>Tagline:</strong> {{ $tagline }}</li>
                <li><strong>Semester:</strong> {{ $semester }}</li>
                <li><strong>Mata Kuliah:</strong> Pemrograman Web Lanjut</li>
            </ul>
        </div>
        
        <div style="flex: 1; min-width: 300px; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); border-top: 4px solid #800000;">
            <h3 style="color: #800000; margin-top: 0; padding-bottom: 10px; border-bottom: 1px solid #eee;">Deskripsi</h3>
            <p style="color: #555; line-height: 1.6;">Terima kasih telah berkunjung. Halaman ini menyajikan informasi mengenai tim pengembang dan detail proyek yang sedang kami kerjakan menggunakan Laravel dan SQLite.</p>
        </div>
    </div>

    <!-- Tim Pengembang Sejajar 4 -->
    <h3 style="text-align: center; color: #800000; margin-bottom: 30px;">Tim Pengembang</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-12">
        
        <!-- Anggota 1 -->
        <div style="background: white; text-align: center; padding: 20px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); border: 1px solid #eee;">
            <!-- Ganti inisial di sini -->
            <div style="width: 60px; height: 60px; background: #800000; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.2rem; font-weight: bold;">
                N
            </div>
            <h4 style="margin: 10px 0 5px; font-size: 0.95rem;">Nirvana Ivanta Phalosa Jaya</h4>
            <p style="color: #888; font-size: 0.8rem; margin: 0;">NIM: 24104410053</p>
        </div>

        <!-- Anggota 2 -->
        <div style="background: white; text-align: center; padding: 20px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); border: 1px solid #eee;">
            <div style="width: 60px; height: 60px; background: #800000; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.2rem; font-weight: bold;">
                C
            </div>
            <h4 style="margin: 10px 0 5px; font-size: 0.95rem;">Cusnul Fitriawati</h4>
            <p style="color: #888; font-size: 0.8rem; margin: 0;">NIM: 25104413072</p>
        </div>

        <!-- Anggota 3 -->
        <div style="background: white; text-align: center; padding: 20px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); border: 1px solid #eee;">
            <div style="width: 60px; height: 60px; background: #800000; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.2rem; font-weight: bold;">
                M
            </div>
            <h4 style="margin: 10px 0 5px; font-size: 0.95rem;">Mohammad Yusuf Jamil alkarim</h4>
            <p style="color: #888; font-size: 0.8rem; margin: 0;">NIM: 24104410092</p>
        </div>

        <!-- Anggota 4 -->
        <div style="background: white; text-align: center; padding: 20px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); border: 1px solid #eee;">
            <div style="width: 60px; height: 60px; background: #800000; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 1.2rem; font-weight: bold;">
                S
            </div>
            <h4 style="margin: 10px 0 5px; font-size: 0.95rem;">Siti Rahmawati </h4>
            <p style="color: #888; font-size: 0.8rem; margin: 0;">NIM: 24104410009</p>
        </div>

    </div>

    </div>
</div>
@endsection