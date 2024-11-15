<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang Kami</title>
    <link rel="icon" href="images/logodki.png" type="image/png" sizes="32x32">
    @vite('resources/css/app.css')
</head>
<x-navbar />
<body>
    <div class="relative max-w-5xl font-poppins mx-auto mt-30 flex flex-col md:flex-row items-start space-y-6 md:space-y-0 md:space-x-8 py-16">
        <!-- Visi Section -->
        <div class="bg-white shadow-xl rounded-lg p-6 flex-1 hover:scale-105 transition-transform">
            <h2 class="text-[26px] font-bold mb-4 text-left">Tentang Kami</h2>
            <p class="text-gray-700 text-justify text-xl">
                Dinas Pertamanan dan Pemakaman Provinsi DKI Jakarta dibentuk berdasarkan Perda Provinsi DKI Jakarta Nomor 10 Tahun 2008. Sebelumnya, pengelolaan pertamanan, penghijauan, dan keindahan kota merupakan tanggung jawab Dinas Pertamanan yang berdiri sejak 1970, melanjutkan peran dari Aafdeling Beplantingen pada masa Hindia Belanda. Pada tahun 1970, Dinas Pertamanan DKI Jakarta resmi dibentuk melalui SK Gubernur dan mengalami berbagai penyesuaian struktur organisasi pada tahun 1976, 1983, dan 1997. Dinas ini bertanggung jawab atas pembangunan, pengelolaan taman, jalur hijau, dan keindahan kota.
                <br>
                <br>
                Pengelolaan pemakaman di Jakarta dimulai sebagai bagian dari Dinas Pekerjaan Umum, hingga menjadi Dinas Pemakaman pada 1969 melalui Keputusan Gubernur. Struktur organisasi ini disempurnakan pada 1971 dan 1977, kemudian berganti nama menjadi Dinas Tata Pemakaman Umum pada 1995. Pada 2001, nomenklatur berubah menjadi Kantor Pelayanan Pemakaman Provinsi DKI Jakarta.
                <br>
                <br>
                Pada 2008, Dinas Pertamanan dan Kantor Pelayanan Pemakaman digabung menjadi Dinas Pertamanan dan Pemakaman. Tahun 2016, berdasarkan Perda Nomor 18 Tahun 2016, terjadi penggabungan dengan Bidang Kehutanan Dinas Kelautan, Pertanian, dan Ketahanan Pangan menjadi Dinas Kehutanan Provinsi DKI Jakarta.
            </p>
        </div>

        <!-- Misi Section -->
        <div class="bg-white shadow-xl rounded-lg p-6 flex-1 hover:scale-105 transition-transform">
            <h2 class="text-2xl font-bold mb-4 text-left">Sejarah</h2>
            <ul class="text-gray-700 list-disc list-inside space-y-2 text-left text-lg">
                <li><span class="font-semibold">1961:</span> DPRD DKI Jakarta merekomendasikan penataan pertamanan agar setara dengan ibu kota negara lain.</li>
                <li><span class="font-semibold">1962:</span> Pemerintah DKI Jakarta mendirikan Akademi Pertamanan (AKAP).</li>
                <li><span class="font-semibold">1962-1970: </span> Dinas Pertamanan hanya sebagai Seksi di Dinas Pekerjaan Umum, dikenal sebagai "Bagian Taman-Taman".</li>
                <li><span class="font-semibold">1970:</span> Dinas Pertamanan resmi dibentuk melalui SK Gubernur No. cd3./1/1/1970.</li>
                <li><span class="font-semibold">1971:</span> Struktur organisasi Dinas Pemakaman disempurnakan.</li>
                <li><span class="font-semibold">1976:</span> Penyempurnaan struktur organisasi Dinas Pertamanan melalui SK Gubernur.</li>
                <li><span class="font-semibold">1977:</span> Penyempurnaan organisasi Dinas Pemakaman dilakukan kembali.</li>
                <li><span class="font-semibold">1983:</span> Peraturan Daerah mengatur susunan organisasi Dinas Pertamanan.</li>
                <li><span class="font-semibold">1995:</span> Dinas Pemakaman berubah nama menjadi Dinas Tata Pemakaman Umum.</li>
                <li><span class="font-semibold">1997:</span> Organisasi Dinas Pertamanan menjadi Dinas Pertamanan dan Keindahan Kota.</li>
                <li><span class="font-semibold">2001:</span> Dinas Pertamanan berdiri sendiri sesuai Keputusan Gubernur No. 8 Tahun 2002.</li>
                <li><span class="font-semibold">2008:</span> Dinas Pertamanan dan Kantor Pelayanan Pemakaman digabung menjadi Dinas Pertamanan dan Pemakaman.</li>
                <li><span class="font-semibold">2016:</span> Dinas Pertamanan dan Pemakaman digabung dengan Bidang Kehutanan menjadi Dinas Kehutanan.</li>
                <li><span class="font-semibold">2019:</span> Pembentukan Dinas Pertamanan dan Hutan Kota melalui Peraturan Gubernur No. 157 Tahun 2019.</li>
            </ul>
        </div>
    </div>
</body>
<x-footer /> 
</html>