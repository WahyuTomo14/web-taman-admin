<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Method untuk menampilkan halaman daftar blog (index)
     // Method untuk halaman utama yang menampilkan beberapa blog
    public function home()
    {
         $blogs = Blog::latest()->take(9)->get(); // Ambil 9 blog terbaru
         return view('Home', compact('blogs'));   // Kirim data blogs ke view home
    }

     // Method untuk menampilkan daftar blog
    public function index()
    {
        $blogs = Blog::paginate(10); // Ambil 10 blog per halaman
        return view('blogs.index', compact('blogs'));
    }

     // Method untuk menampilkan detail blog
    public function show($title)
    {
        $blog = Blog::where('title', $title)->firstOrFail();
        return view('blogs.show', compact('blog'));
    }
}
