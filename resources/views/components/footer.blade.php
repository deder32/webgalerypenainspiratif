<footer class="bg-blue-500 text-white p-8">
  <div class="container mx-auto max-w-6xl">
    <!-- Grid Utama -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
      
      <!-- Kolom 1: Menu -->
      <div>
        <h2 class="text-xl font-bold mb-4 border-b pb-2">Menu</h2>
        <ul class="space-y-2">
          <li><a href="{{route('front.allpost')}}" class="hover:text-blue-300">All Post</a></li>
          <li><a href="{{route('front.contact')}}" class="hover:text-blue-300">Contact</a></li>
          <li><a href="{{route('front.index')}}" class="hover:text-blue-300">Home Page</a></li>
        </ul>
      </div>

      <!-- Kolom 2: Kontak -->
      <div>
        <h2 class="text-xl font-bold mb-4 border-b pb-2">Contact</h2>
        <ul class="space-y-3">
          <li class="flex items-center gap-2">
            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            penainspiratif@gmail.com
          </li>
          <li class="flex items-center gap-2">
            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            <a href="https://wa.me/6285591798663" class="hover:underline">+62 855 9179 8663</a>
          </li>
        </ul>
      </div>

      <!-- Kolom 3: Lokasi -->
      <div>
        <h2 class="text-xl font-bold mb-4 border-b pb-2">Our Location</h2>
        <address class="not-italic mb-4">
        Jl. Moh Noh Noor Km 8, Leuwiliang <br>
        Bogor Regency, West Java 16640
        </address>
        
        <!-- Google Maps Embed -->
        <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-lg">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.081370484466!2d106.6316182731741!3d-6.636816764875387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69d7529a258b63%3A0x25d4e941025584e4!2sSMK%20Al%20Hafidz%20Leuwiliang!5e0!3m2!1sid!2sid!4v1745081496960!5m2!1sid!2sid"
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
            class="min-h-[200px]">
          </iframe>
        </div>
        
        <a href="https://maps.google.com?q=Jl.+Pendidikan+No.+123+Bandung" 
           target="_blank" 
           class="inline-block mt-2 text-blue-300 hover:underline text-sm">
          Lihat peta lebih besar →
        </a>
      </div>
    </div>

    <!-- Footer Bawah -->
    <div class="border-t border-white-700 pt-6 text-center">
    <div class="flex flex-col md:flex-row justify-between items-center">
    <!-- Logo dan Brand -->
    <div class="flex items-center gap-4 mb-4 md:mb-0">
        <img src="{{asset('assets/images/logos/penainspiratif.png')}}" alt="Pena Inspiratif"class="w-20 h-auto">
          <div class="text-left">
            <h2 class="text-lg font-semibold">Pena Inspiratif</h2>
            <p class="text-sm text-white-400">Suara masa depan!</p>
          </div>
        </div>
      <p class="text-xs text-white-400">
        © 2025 Pena Inspiratif. All rights reserved.
      </p>
    </div>
      </div>
    </div>
  </div>
</footer>