<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
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

    <section class="py-16 bg-white font-poppins">
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
    
</body>
<x-footer /> 
</html>