<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Blog</title>
    <link rel="icon" href="images/logodki.png" type="image/png" sizes="32x32">
</head>
<x-navbar />
<body>
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-semibold mb-6 text-center">Selamat Datang Di Blog Dinas Pertamanan Dan Hutan Kota</h2>
    
        <div class="container mx-auto py-8 pb-10">
            <form action="{{ route('blogs.index') }}" method="GET" class="flex items-center space-x-2">
                <input
                    type="text"
                    name="search"
                    placeholder="Cari blog..."
                    value="{{ request('search') }}"
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-900"
                >
                <button type="submit" class="px-4 py-2 bg-[#0A0737] text-white rounded-lg hover:bg-amber-600 ">
                    Cari
                </button>
            </form>
        </div>

        <!-- Pesan jika tidak ada hasil pencarian -->
        @if($blogs->isEmpty())
            <p class="text-center text-gray-500">Blog tidak ditemukan "{{ request('search') }}"</p>
        @endif
    
        <!-- Menampilkan daftar blog -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 justify-center">
            @foreach($blogs as $blog)
            <div class="bg-white shadow-md rounded-lg overflow-hidden w-80 hover:scale-105 transition-transform hover:shadow-md">
                <img src="{{ Storage::disk('taman')->url($blog->thumbnail) }}" alt="Blog Image" class="w-full h-48 object-cover">
                <div class="p-4">
                    <p class="text-sm text-gray-500">{{ $blog->created_at->format('M d, Y') }}</p>
                    <p class="text-sm text-white inline-block bg-cyan-700 font-semibold px-2 rounded shadow text-center">{{ $blog->blogCategori->name }}</p>
                    <h3 class="text-lg font-semibold mt-2 hover:text-[#0A0737]">{{ $blog->title }}</h3>
                    <p class="text-gray-800 text-sm mt-2">
                        {{ Str::limit(strip_tags($blog->body), 100) }}
                    </p>
                    <a href="{{ route('blogs.show', $blog->id) }}" class="text-amber-600 mt-4 inline-block">Selengkapnya...</a>
                </div>
            </div>
            @endforeach
        </div>
    
        <!-- Pagination -->
        <div class="mt-8">
            {{ $blogs->links() }}
        </div>
    </div>    
</body>
<x-footer /> 
</html>
