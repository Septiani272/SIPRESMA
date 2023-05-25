<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Prestasi;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        
        return view('pages.admin.dashboard',[
            // 'prestasiByProdi' => $prestasiByProdi,
            'prestasi' => Prestasi::count(),
            'user' => User::where('roles','=', 'USER')->count(),
            'admin' => User::where('roles', '=', 'ADMIN')->count(),
            'tanggapan' => Tanggapan::count(),
            'pending' => Prestasi::where('status', 'Belum di Proses')->count(),
            'process' => Prestasi::where('status', 'Perlu Diperbaiki')->count(),
            'success' => Prestasi::where('status', 'Selesai')->count(),
        ]);
    }
}