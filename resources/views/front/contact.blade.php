<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('output.css')}}" rel="stylesheet" />
	<link href="{{asset('main.css')}}" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
	<!-- CSS -->
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-[Poppins]">
<x-navbar/>
<section class="py-12 px-4 sm:px-6 lg:px-8 bg-gray-50">
  <div class="max-w-4xl mx-auto">
    
    <!-- Judul Section -->
    <div class="text-center mb-10">
      <h2 class="text-3xl font-bold text-gray-900 mb-2">Kontak Kami</h2>
      <p class="text-lg text-gray-600">Hubungi tim kami untuk informasi lebih lanjut</p>
    </div>

    <!-- Grid Kontak -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Form Kontak -->
      <div class="bg-white p-6 rounded-xl shadow-md">
        <h3 class="text-xl font-semibold mb-4">Kirim Pesan</h3>
        <form class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
            <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Pesan</label>
            <textarea rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>
          </div>
          <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition duration-300">
            Kirim Pesan
          </button>
        </form>
      </div>

      <!-- Info Kontak -->
      <div class="bg-white p-6 rounded-xl shadow-md">
        <h3 class="text-xl font-semibold mb-4">Informasi Kontak</h3>
        <div class="space-y-5">
          
          <!-- Alamat -->
          <div class="flex items-start">
            <div class="bg-blue-100 p-2 rounded-lg mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium text-gray-900">Alamat</h4>
              <p class="text-gray-600">Jl. Moh Noh Noor Km 8, Leuwiliang
              Bogor Regency, West Java 16640</p>
            </div>
          </div>

          <!-- Email -->
          <div class="flex items-start">
            <div class="bg-blue-100 p-2 rounded-lg mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium text-gray-900">Email</h4>
              <p class="text-gray-600">penainspiratif@gmail.com</p>
            </div>
          </div>

          <!-- Telepon -->
          <div class="flex items-start">
            <div class="bg-blue-100 p-2 rounded-lg mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium text-gray-900">Telepon</h4>
              <p class="text-gray-600">(+62) 85591798663</p>
            </div>
          </div>

          <!-- Jam Operasional -->
          <div class="flex items-start">
            <div class="bg-blue-100 p-2 rounded-lg mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h4 class="font-medium text-gray-900">Jam Operasional</h4>
              <p class="text-gray-600">Senin-Jumat: 08.00 - 16.00 WIB</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<x-footer/>
</body>
</html>