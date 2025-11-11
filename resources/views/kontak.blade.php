<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak | Muflizar Putra Abidin</title>
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
          <li><a href="proyek.html" class="hover:text-indigo-400 transition">Proyek</a></li>
        </ul>
      </nav>
    </header>

    <!-- Contact Form -->
    <section class="py-24 text-center">
      <h2 class="text-4xl font-bold text-indigo-400 mb-6">Kontak Saya</h2>
      <p class="text-gray-400 mb-10">Ingin bekerja sama atau sekadar menyapa? Kirim pesan di bawah ini!</p>

      <form class="max-w-md mx-auto space-y-4">
        <input type="text" placeholder="Nama" class="w-full p-3 rounded-lg bg-gray-800 border border-gray-700 focus:ring-2 focus:ring-indigo-500 outline-none">
        <input type="email" placeholder="Email" class="w-full p-3 rounded-lg bg-gray-800 border border-gray-700 focus:ring-2 focus:ring-indigo-500 outline-none">
        <textarea placeholder="Pesan" rows="4" class="w-full p-3 rounded-lg bg-gray-800 border border-gray-700 focus:ring-2 focus:ring-indigo-500 outline-none"></textarea>
        <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-600 py-3 rounded-lg font-semibold transition">Kirim Pesan</button>
      </form>
    </section>
  </body>
</html>
