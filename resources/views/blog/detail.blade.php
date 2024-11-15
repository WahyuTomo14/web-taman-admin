<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Menggunakan slug untuk title -->
    <title>{{ $blog->title }}</title>
    <link rel="icon" href="images/logodki.png" type="image/png" sizes="32x32">
    @vite('resources/css/app.css')
</head>
<x-navbar />
<body>
     <!-- Blog Detail -->
     <div class="container mx-auto py-8 px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <!-- Thumbnail Image -->
            <img src="{{ Storage::disk('taman')->url($blog->thumbnail) }}" alt="Blog Image" class="w-full h-80">

            <div class="p-4">
                <!-- Blog Title and Date -->
                <h1 class="text-3xl font-bold mb-4">{{ $blog->title }}</h1>
                <p class="text-sm text-gray-500">{{ $blog->created_at->format('M d, Y') }}</p>
                <p class="text-sm text-white inline-block bg-cyan-700 font-semibold px-2 rounded shadow text-center">{{ $blog->blogCategori->name }}</p>

                <!-- Blog Body Content -->
                <div class="mt-4 text-gray-800">
                    {!! nl2br(strip_tags($blog->body, '<p><br><img>')) !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Lainnya -->
    <div class="container mx-auto py-8">
        <h2 class="text-3xl font-bold mb-6 text-center pb-8">Blog Lainnya</h2>
        <div class="flex overflow-x-auto space-x-4 pb-4 items-center justify-center">
            @foreach($blogs->chunk(3) as $chunk)
                <div class="flex-shrink-0 flex space-x-4 w-full">
                    @foreach($chunk as $blog)
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
            @endforeach
        </div>
    </div>
</body>
<x-footer />
</html>
