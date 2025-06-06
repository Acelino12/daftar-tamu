<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\BukutamuEntry;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class BukutamuEntryController extends Controller
{

    public function store(Request $request)
    {
        // Validasi
        $Data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Simpan ke Database
        BukutamuEntry::create([
            'name' => $Data['name'],
            'email' => $Data['email'],
            'message' => $Data['message'],
        ]);

        // Redirect dengan pesan sukses
        return redirect('/bukutamu')->with('success', 'Terima kasih! Pesan Anda telah terkirim.');
    }

    public function admin()
    {
        $daftartamu = BukutamuEntry::all();
        // dd($daftartamu);
        return view('admin', ['tamulist'=> $daftartamu]);
    }

    public function filteradmin(Request $request){

        $query = BukutamuEntry::orderBy('created_at');
        $start_date = Carbon::parse($request->input('start_date')); // misalnya: 2025-08-14
        $end_date = Carbon::parse($request->input('end_date')); // misalnya: 2025-08-14

        if (!empty($start_date)) {
            // Filter mulai dari awal hari tanggal start_date
            $query->whereDate('created_at', '>=', $start_date);
        }
        if (!empty($end_date)) {
            // Filter hingga akhir hari tanggal end_date
            $query->whereDate('created_at', '<=', $end_date);
        }

        $daftartamu = $query->get();
        // dd($daftartamu);
        return view('admin', ['tamulist'=> $daftartamu]);
    }

}
