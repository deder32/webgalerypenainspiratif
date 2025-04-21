<div class="org-structure bg-white p-6 rounded-xl shadow-lg max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold text-center text-blue-800 mb-8">STRUKTUR ORGANISASI</h2>
    
    <!-- Level 1: Kepala Sekolah -->
    <div class="flex flex-col items-center mb-10">
        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-gold-500 shadow-xl mb-4">
            <img src="{{ asset('assets/images/org/kepsek.jpg') }}" 
                 class="w-full h-full object-cover" 
                 alt="Kepala Sekolah">
        </div>
        <h3 class="text-xl font-bold text-gray-800">Ikrima Dieniati Sudirman, S.Pd</h3>
        <p class="text-blue-600 font-medium">Kepala Sekolah</p>
    </div>

    <!-- Level 2: Pembina -->
    <div class="flex justify-center mb-8">
        <div class="text-center mx-6">
            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-purple-500 shadow-lg mb-3">
                <img src="{{ asset('assets/images/org/pembina.jpg') }}" 
                     class="w-full h-full object-cover" 
                     alt="Pembina">
            </div>
            <h4 class="font-bold text-gray-800">Luthfia Rifaah, S.Te</h4>
            <p class="text-sm text-purple-600">Pembina Ekstrakurikuler</p>
        </div>
    </div>

    <!-- Level 3: Pengurus Inti -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        <!-- Ketua -->
        <div class="text-center">
            <div class="w-28 h-28 mx-auto rounded-full overflow-hidden border-4 border-green-500 shadow-md mb-3">
                <img src="{{ asset('assets/images/org/ketua.jpg') }}" 
                     class="w-full h-full object-cover" 
                     alt="Ketua">
            </div>
            <h4 class="font-semibold text-gray-800">Dede Risma Komalasari</h4>
            <p class="text-sm text-green-600">Ketua</p>
        </div>

        <!-- Sekretaris -->
        <div class="text-center">
            <div class="w-28 h-28 mx-auto rounded-full overflow-hidden border-4 border-blue-500 shadow-md mb-3">
                <img src="{{ asset('assets/images/org/sekretaris.jpg') }}" 
                     class="w-full h-full object-cover" 
                     alt="Sekretaris">
            </div>
            <h4 class="font-semibold text-gray-800">Intan</h4>
            <p class="text-sm text-blue-600">Sekretaris</p>
        </div>

        <!-- Bendahara -->
        <div class="text-center">
            <div class="w-28 h-28 mx-auto rounded-full overflow-hidden border-4 border-red-500 shadow-md mb-3">
                <img src="{{ asset('assets/images/org/bendahara.jpg') }}" 
                     class="w-full h-full object-cover" 
                     alt="Bendahara">
            </div>
            <h4 class="font-semibold text-gray-800">Zahratussalus</h4>
            <p class="text-sm text-red-600">Bendahara</p>
        </div>
    </div>

    <!-- Garis penghubung (desktop only) -->
    <div class="connectors hidden md:block relative">
        <div class="absolute top-0 left-1/2 h-16 border-l-2 border-dashed border-gray-400" style="transform: translateX(-50%);"></div>
        <div class="absolute top-16 left-1/4 right-1/4 h-8 border-t-2 border-dashed border-gray-400"></div>
    </div>
</div>

<style>
    .border-gold-500 { border-color: #d4af37; }
    .org-structure {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to bottom, #f8fafc, #ffffff);
    }
</style>