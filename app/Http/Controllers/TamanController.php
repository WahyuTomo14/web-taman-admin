<?php

namespace App\Http\Controllers;

use App\Models\Taman;
use App\Models\Kelurahan;
use Illuminate\Http\Request;
use App\Models\Kecamatan;

class TamanController extends Controller
{
    public function index(Request $request)
    {
        // Ambil nilai pencarian dan filter dari input
        $search = $request->input('search');
        $filterKelurahan = $request->input('kelurahan');
        $filterKecamatan = $request->input('kecamatan');

        // Query data taman dengan relasi kelurahan dan kecamatan
        $taman = Taman::with(['kelurahan.kecamatan'])
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%$search%")
                            ->orWhere('alamat', 'like', "%$search%");
            })
            ->when($filterKelurahan, function ($query, $filterKelurahan) {
                return $query->whereHas('kelurahan', function ($q) use ($filterKelurahan) {
                    $q->where('id', $filterKelurahan);
                });
            })
            ->when($filterKecamatan, function ($query, $filterKecamatan) {
                return $query->whereHas('kelurahan.kecamatan', function ($q) use ($filterKecamatan) {
                    $q->where('id', $filterKecamatan);
                });
            })
            ->paginate(20); // Paginasi sebanyak 20 data per halaman

        // Ambil data kelurahan dan kecamatan untuk pilihan filter
        $kelurahans = Kelurahan::all();
        $kecamatans = Kecamatan::all();

        return view('Taman', compact('taman', 'kelurahans', 'kecamatans'));
    }
}
