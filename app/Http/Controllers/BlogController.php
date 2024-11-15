<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Method untuk menampilkan halaman utama yang menampilkan beberapa blog
    public function home()
    {
        // Mengambil 9 blog terbaru
        $blogs = Blog::latest()->take(9)->get(); 
        return view('home', compact('blogs'));  // pastikan 'home' adalah nama file view yang benar
    }

    // Method untuk menampilkan halaman daftar blog (index) dengan pagination
    public function blog()
    {
        // Mengambil 9 blog terbaru dengan pagination
        $blogs = Blog::latest()->paginate(9);
        return view('blog.index', compact('blogs'));
    }

    // Method untuk menampilkan halaman daftar blog (index) dengan pencarian dan pagination
    public function index(Request $request)
    {
        // Mencari berdasarkan input dari form pencarian
        $search = $request->input('search');
        
        $blogs = Blog::query()
            ->when($search, function($query, $search) {
                return $query->where('title', 'like', "%{$search}%")
                        ->orWhere('body', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(10); // Pagination 10 data per halaman

        return view('blog.index', compact('blogs'));  // Mengirimkan data ke view blog.index
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);  // Mencari blog berdasarkan ID
        $blogs = Blog::where('id', '!=', $id)->latest()->take(6)->get();
        return view('blog.detail', compact('blog', 'blogs')); // Mengirimkan data blog ke view
    }
}
