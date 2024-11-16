<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taman</title>
    <link rel="icon" href="images/logodki.png" type="image/png" sizes="32x32">
    @vite('resources/css/app.css')
</head>
<x-navbar />
<body>
    <div class="max-w-4xl mx-auto p-4">
        <!-- Form pencarian dan filter -->
        <p class="text-xl text-center font-semibold pb-8">Daftar Taman Di Provinsi DKI Jakarta</p>
        <form method="GET" action="{{ url('/taman') }}" class="mb-4 flex flex-wrap gap-4">
            <input
                type="text"
                name="search"
                placeholder="Cari Taman"
                value="{{ request('search') }}"
                class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-indigo-200 w-full sm:w-1/3"
            />
    
            <select
                name="kelurahan"
                class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-indigo-200 w-full sm:w-1/4"
            >
                <option value="">Kelurahan</option>
                @foreach($kelurahans as $kelurahan)
                    <option value="{{ $kelurahan->id }}" {{ request('kelurahan') == $kelurahan->id ? 'selected' : '' }}>
                        {{ $kelurahan->name }}
                    </option>
                @endforeach
            </select>
    
            <select
                name="kecamatan"
                class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-indigo-200 w-full sm:w-1/4"
            >
                <option value="">Kecamatan</option>
                @foreach($kecamatans as $kecamatan)
                    <option value="{{ $kecamatan->id }}" {{ request('kecamatan') == $kecamatan->id ? 'selected' : '' }}>
                        {{ $kecamatan->name }}
                    </option>
                @endforeach
            </select>
    
            <button type="submit" class="bg-amber-600 text-white rounded-lg p-4 w-full sm:w-auto">
                Cari
            </button>
        </form>
    </div> 

        <div class="flex justify-center px-4 py-4">
            <div class="overflow-x-auto w-full max-w-4xl">
            <table class="min-w-full bg-gray-100 border border-gray-500">
                <thead class="bg-[#0A0737]">
                    <tr>
                        <th class="px-6 py-3 text-left text-m font-semibold text-gray-200 border">Name</th>
                        <th class="px-6 py-3 text-left text-m font-semibold text-gray-200 border">Alamat</th>
                        <th class="px-6 py-3 text-left text-m font-semibold text-gray-200 border">Kelurahan</th>
                        <th class="px-6 py-3 text-left text-m font-semibold text-gray-200 border">Kecamatan</th>
                        <th class="px-6 py-3 text-left text-m font-semibold text-gray-200 border">No KIB</th>
                        <th class="px-6 py-3 text-left text-m font-semibold text-gray-200 border">Luas</th>
                        <th class="px-6 py-3 text-left text-m font-semibold text-gray-200 border">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($taman as $item)
                        <tr class="border-b">
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $item->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $item->alamat }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $item->kelurahan->name ?? '-' }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $item->kelurahan->kecamatan->name ?? '-' }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $item->no_kib }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $item->luas }}</td>
                            <td class="px-6 py-4 text-sm text-gray-800">{{ $item->keterangan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div> 

    <div class="mt-4">
        {{ $taman->links() }}
    </div>
</body>
<x-footer /> 
</html>