<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link rel="icon" href="images/logodki.png" type="image/png" sizes="32x32">
    @vite('resources/css/app.css')
</head>
<x-navbar />
<body>
    <!-- Section Hero -->
    <div class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('images/hero.png') }}');">
        <!-- Overlay hitam dengan transparansi 20% -->
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative z-10 flex h-full">
            <div class="absolute bottom-0 text-white pb-32 pl-14">
                <h1 class="text-2xl md:text-4xl font-bold hover:text-yellow-500">DINAS PERTAMANAN DAN HUTAN KOTA</h1>
                <h1 class="text-2xl md:text-4xl font-bold hover:text-yellow-500">PROVINSI DKI JAKARTA</h1>
            </div>
        </div>
    </div>

    <!-- Section apa itu dinas peternakan -->
    <section class="py-16 bg-white font-poppins items-center">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <!-- Kolom kiri: Logo -->
                <div class="flex justify-center">
                    <!-- Ganti dengan logo/gambar Anda -->
                    <img src="images/logodinas.png" alt="Logo Dinas Pertamanan" class="w-[372px] h-[400px] hover:scale-105 transition-transform">
                </div>
                <!-- Kolom kanan: Teks -->
                <div class="text-left">
                    <h2 class="text-2xl font-bold mb-8">Apa itu Dinas Pertamanan Dan Hutan Kota?</h2>
                    <p class="text-xl">
                        Dinas Pertamanan dan Pemakaman dibentuk sejak diberlakukannya Peraturan Daerah (Perda) Provinsi DKI Jakarta Nomor 10 Tahun 2008 tentang Organisasi Perangkat Daerah. Penggabungan ini didasarkan atas dasar bahwa kedua unit pelaksanan otonomi ini dalam melaksanakan tugas dan fungsinya dikoordinasikan oleh Asisten Pembangunan dan Lingkungan Hidup memiliki tugas dan wewenang untuk membangun dan mengelola taman, jalur hijau, keindahan kota, dan makam yang merupakan bagian Ruang Terbuka Hijau Kota.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section visi misi -->
    <div class="relative bg-white pb-10 font-poppins">
        <!-- Full-width Image Section -->
        <div class="absolute top-0 left-0 w-full h-90 overflow-hidden">
            <img src="{{ asset('images/fotovisimisi.png') }}" alt="Group Photo" class="w-full h-full object-cover">
        </div>
    
        <!-- Visi and Misi Section -->
        <div class="relative max-w-5xl mx-auto mt-30 flex flex-col md:flex-row items-start space-y-6 md:space-y-0 md:space-x-8 pt-80 justify-center">
            <!-- Visi Section -->
            <div class="bg-white shadow-xl rounded-lg p-6 flex-1 hover:scale-105 transition-transform">
                <h2 class="text-xl font-bold mb-4 text-center">Visi</h2>
                <p class="text-gray-700 text-center">
                    Ruang Terbuka Hijau Jakarta yang Nyaman, Maju, Lestari dan Terjangkau bagi warga
                </p>
                <p class="text-gray-500 text-center mt-4">(berdasarkan RENSTRA 2017 – 2022)</p>
            </div>
    
            <!-- Misi Section -->
            <div class="bg-[#0A0737] shadow-xl rounded-lg p-6 flex-1 text-white hover:scale-105 transition-transform">
                <h2 class="text-2xl font-bold mb-4 text-center">Misi</h2>
                <ul class="list-disc list-inside space-y-2 text-justify">
                    <li>Menyediakan Ruang Terbuka Hijau Hutan, Taman dan Pemakaman yang nyaman sebagai ruang aktivitas dan kreativitas publik;</li>
                    <li>Meningkatkan Pelayanan dan peran serta masyarakat di Bidang Kehutanan, Pertamanan dan Pemakaman dalam penyediaan dan pengelolaan Ruang Terbuka Hijau;</li>
                    <li>Mewujudkan konservasi flora dan fauna yang memperkuat daya dukung lingkungan;</li>
                    <li>Meningkatkan tata kelola organisasi Dinas Kehutanan yang berorientasi pada pelayanan publik.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Kartu Jumlah -->
    <div class="mt-10 w-full bg-[#0A0737] py-14 font-inter">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10 px-4 md:px-0">
            <!-- Kartu Jumlah Taman -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:scale-105 transition-transform hover:bg-amber-500 group">
                <h3 class="text-2xl font-bold text-gray-800 group-hover:text-white">Jumlah Taman</h3>
                <p class="text-4xl font-extrabold text-green-600 mt-2 group-hover:text-white">150</p>
                <p class="text-gray-600 mt-1 group-hover:text-white">Taman</p>
            </div>

            <!-- Kartu Jumlah RPTRA -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:scale-105 transition-transform hover:bg-amber-500 group">
                <h3 class="text-2xl font-bold text-gray-800 group-hover:text-white">Jumlah RPTRA</h3>
                <p class="text-4xl font-extrabold text-green-600 mt-2 group-hover:text-white">75</p>
                <p class="text-gray-600 mt-1 group-hover:text-white">RPTRA</p>
            </div>

            <!-- Kartu Luas Tanah -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center hover:scale-105 transition-transform hover:bg-amber-500 group">
                <h3 class="text-2xl font-bold text-gray-800 group-hover:text-white">Luas Tanah</h3>
                <p class="text-4xl font-extrabold text-green-600 mt-2 group-hover:text-white">170.302 m2</p>
                <p class="text-gray-600 mt-1 group-hover:text-white">Total Ruang Terbuka Hijau</p>
            </div>
        </div>
    </div>

    </div>
</body>
<x-footer /> 
</html>