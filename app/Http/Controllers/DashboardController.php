<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Matakuliah;
use App\Models\Jadwal;
use App\Models\Krs;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard', [
            'jumlahMahasiswa' => Mahasiswa::count(),
            'jumlahDosen' => Dosen::count(),
            'jumlahMatakuliah' => Matakuliah::count(),
            'jumlahJadwal' => Jadwal::count(),
            'jumlahKrs' => Krs::count(),
        ]);
    }
}