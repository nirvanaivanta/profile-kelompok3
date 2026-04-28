<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Kelompok</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">

    <!-- NAVBAR -->
   <nav class="bg-red-800 text-white">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-lg font-semibold">Kelompok 3</h1>

            <div class="space-x-6 hidden md:flex">
                <a href="/home" class="{{ request()->is('home') ? 'text-yellow-300 font-semibold border-b-2 border-yellow-300 pb-1' : 'hover:text-red-200' }}">Home</a>
                <a href="/about" class="{{ request()->is('about') ? 'text-yellow-300 font-semibold border-b-2 border-yellow-300 pb-1' : 'hover:text-red-200' }}">About</a>
                <a href="/blog" class="{{ request()->is('blog') ? 'text-yellow-300 font-semibold border-b-2 border-yellow-300 pb-1' : 'hover:text-red-200' }}">Blog</a>
                <a href="/contact" class="{{ request()->is('contact') ? 'text-yellow-300 font-semibold border-b-2 border-yellow-300 pb-1' : 'hover:text-red-200' }}">Contact</a>
            </div>

            <button id="menu-btn" class="md:hidden text-2xl focus:outline-none">
                ☰
            </button>
        </div>

        <div id="mobile-menu" class="hidden px-6 pb-4 md:hidden space-y-3">
            <a href="/home" class="block {{ request()->is('home') ? 'text-yellow-300 font-semibold' : 'hover:text-red-200' }}">Home</a>
            <a href="/about" class="block {{ request()->is('about') ? 'text-yellow-300 font-semibold' : 'hover:text-red-200' }}">About</a>
            <a href="/blog" class="block {{ request()->is('blog') ? 'text-yellow-300 font-semibold' : 'hover:text-red-200' }}">Blog</a>
            <a href="/contact" class="block {{ request()->is('contact') ? 'text-yellow-300 font-semibold' : 'hover:text-red-200' }}">Contact</a>
        </div>
    </nav>
    <!-- CONTENT -->
    <main class="container mx-auto px-6 py-10 flex-1">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-red-900 text-white text-center py-4 mt-10">
        <p class="text-sm">© 2026 Kelompok 3. Pemrograman Web Lanjut. Semester 4</p>
    </footer>

    <script>
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>