@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div style="background: #800000; color: white; padding: 60px 0; text-align: center; margin-bottom: 30px;">
        <h1 style="font-size: 2.5rem; margin-bottom: 10px;">
            {{ $hero['judul'] }}
        </h1>
        <p style="font-size: 1.2rem; opacity: 0.9;">
            {{ $hero['subjudul'] }}
        </p>
    </div>

    <div class="container" style="max-width: 1100px; margin: auto; padding: 0 20px; font-family: 'Segoe UI', sans-serif;">

        <div style="display: flex; gap: 20px; flex-wrap: wrap;">

            <!-- Form Kontak -->
            <div
                style="flex: 2; min-width: 300px; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); border-top: 4px solid #800000;">
                <h3 style="color: #800000; margin-top: 0;">Kirim Pesan</h3>

                <form method="POST" action="#">
                    @csrf

                    <div style="margin-bottom: 15px;">
                        <label>Nama</label><br>
                        <input type="text" name="nama" placeholder="Masukkan nama" required
                            style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc;">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label>Email</label><br>
                        <input type="email" name="email" placeholder="Masukkan email" required
                            style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc;">
                    </div>

                    <div style="margin-bottom: 15px;">
                        <label>Pesan</label><br>
                        <textarea name="pesan" rows="5" placeholder="Tulis pesan..." required
                            style="width: 100%; padding: 10px; border-radius: 6px; border: 1px solid #ccc;"></textarea>
                    </div>

                    <button type="submit"
                        style="background: #800000; color: white; padding: 10px 20px; border: none; border-radius: 6px; cursor: pointer;">
                        Kirim
                    </button>
                </form>
            </div>

            <!-- Info Kontak -->
            <div
                style="flex: 1; min-width: 300px; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); border-top: 4px solid #800000;">
                <h3 style="color: #800000; margin-top: 0;">Informasi Kontak</h3>

                <p><strong>Email:</strong><br> {{ $kontak['email'] }}</p>
                <p><strong>Telepon:</strong><br> {{ $kontak['telepon'] }}</p>
                <p><strong>Alamat:</strong><br> {{ $kontak['alamat'] }}</p>
                <hr>

                <p style="color: #555;">
                    {{ $kontak['deskripsi'] }}
                </p>
            </div>

        </div>

    </div>
@endsection
