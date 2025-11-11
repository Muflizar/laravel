<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek | Muflizar Putra Abidin</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-950 text-white font-sans">
    <!-- Navbar -->
    <header class="bg-gray-900 border-b border-gray-800 sticky top-0 z-50">
      <nav class="container mx-auto flex justify-between items-center px-6 py-4">
        <h1 class="text-2xl font-bold text-indigo-400">m0efl1</h1>
        <ul class="hidden md:flex space-x-8 text-gray-300">
          <li><a href="index.html" class="hover:text-indigo-400 transition">Beranda</a></li>
          <li><a href="tentang.html" class="hover:text-indigo-400 transition">Tentang</a></li>
          <li><a href="kontak.html" class="hover:text-indigo-400 transition">Kontak</a></li>
        </ul>
      </nav>
    </header>

    <!-- Projects -->
    <section class="py-24 container mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold text-indigo-400 mb-12">Proyek Saya</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-gray-800/60 p-6 rounded-2xl border border-gray-700 hover:-translate-y-2 transition">
          <img src="https://via.placeholder.com/400x250" alt="Project 1" class="rounded-lg mb-4">
          <h4 class="text-xl font-semibold mb-2">Aplikasi Manajemen Tugas</h4>
          <p class="text-gray-400 mb-4 text-sm">Aplikasi web untuk mengatur dan memantau tugas tim secara efisien.</p>
        </div>
        <div class="bg-gray-800/60 p-6 rounded-2xl border border-gray-700 hover:-translate-y-2 transition">
          <img src="https://via.placeholder.com/400x250" alt="Project 2" class="rounded-lg mb-4">
          <h4 class="text-xl font-semibold mb-2">Website Portofolio</h4>
          <p class="text-gray-400 mb-4 text-sm">Portofolio pribadi berbasis TailwindCSS dengan tampilan responsif.</p>
        </div>
        <div class="bg-gray-800/60 p-6 rounded-2xl border border-gray-700 hover:-translate-y-2 transition">
          <img src="https://via.placeholder.com/400x250" alt="Project 3" class="rounded-lg mb-4">
          <h4 class="text-xl font-semibold mb-2">Sistem Pemesanan Tiket</h4>
          <p class="text-gray-400 mb-4 text-sm">Sistem CRUD dengan Laravel dan dashboard admin modern.</p>
        </div>
      </div>

      <a href="kontak.html" class="mt-12 inline-block bg-indigo-500 hover:bg-indigo-600 px-6 py-3 rounded-lg transition">Hubungi Saya</a>
    </section>
  </body>
</html>
