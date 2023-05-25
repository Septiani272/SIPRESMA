<?php

namespace App\Http\Controllers;

use File;
use App\Models\User;
use App\Models\Prestasi;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class MahasiswaController extends Controller
{
    public function index()
{
    $jumlahPrestasiPerluDiperbaiki = Prestasi::where('status', 'Perlu Diperbaiki')->count();
    $mahasiswa = User::where('npm', auth()->user()->npm)->first();

    return view('pages.mahasiswa.index', compact('mahasiswa', 'jumlahPrestasiPerluDiperbaiki'));
}

    


    public function TambahPrestasi()
    {
        $user = Auth::user()->npm;
        // dd($user);

        return view('pages.mahasiswa.tambah_prestasi', ['liat' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.mahasiswa.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bukti' => ['required', 'string', 'regex:/^https:\/\/drive\.google\.com\/.*$/'],
            'waktu_perolehan' => 'required|date_format:Y',
        ]);

        $npm = Auth::user()->npm;
        $prodi = Auth::user()->prodi;
        $name = Auth::user()->name;
        $data = $request->all();
        $data['user_npm'] = $npm;
        $data['user_name'] = $name;
        $data['user_prodi'] = $prodi;
        $data['dospem'] = $request->dospem;
        $data['nip'] = $request->nip;
        $data['nama_kegiatan'] = $request->nama_kegiatan;
        $data['bukti'] = $request->bukti;
        $data['waktu_perolehan'] = $request->waktu_perolehan;
        $data['tingkat'] = $request->tingkat;
        $data['jumlah_PT'] = $request->jumlah_PT;
        $data['jumlah_peserta'] = $request->jumlah_peserta;
        $data['prestasi_yg_dicapai'] = $request->prestasi_yg_dicapai;
        $data['diperoleh'] = $request->diperoleh;


        Alert::success('Berhasil', 'Prestasi terkirim');
        // prestasi::create($data);
        Prestasi::create($data);
        return redirect('user/prestasi/proses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // public function lihat()
    // {


    //     $user = Auth::user()->prestasi()->orderBy('created_at', 'DESC')->get();

    //     return view('pages.mahasiswa.detail', [
    //         'items' => $user
    //     ]);
    // }
    public function lihat()
    {

        $user = Auth::user()->prestasi()->where('status', 'Belum di Proses')->orderBy('created_at', 'DESC')->get();

        return view('pages.mahasiswa.belum_diproses', [
            'items' => $user
        ]);      
        $tangap = Tanggapan::all();
        // return view ('mahasiswa.registerMahasiswa',compact(['prodi']));
        // $tangap = Tanggapan::where('prestasi_id',$id)->first();
        return view ('pages.mahasiswa.belum_diproses',compact(['tangap']));
    }

    public function diperbaiki()
    {

        $user = Auth::user()->prestasi()->where('status', 'Perlu Diperbaiki')->orderBy('created_at', 'DESC')->get();

        return view('pages.mahasiswa.perlu_diperbaiki', [
            'items' => $user
        ]);      
        $tangap = Tanggapan::all();
        // return view ('mahasiswa.registerMahasiswa',compact(['prodi']));
        // $tangap = Tanggapan::where('prestasi_id',$id)->first();
        return view ('pages.mahasiswa.perlu_diperbaiki',compact(['tangap']));
    }
    public function selesai_proses()
    {

        $user = Auth::user()->prestasi()->where('status', 'Selesai')->orderBy('created_at', 'DESC')->get();

        return view('pages.mahasiswa.prestasi_selesai', [
            'items' => $user
        ]);      
        $tangap = Tanggapan::all();
        // return view ('mahasiswa.registerMahasiswa',compact(['prodi']));
        // $tangap = Tanggapan::where('prestasi_id',$id)->first();
        return view ('pages.mahasiswa.prestasi_selesai',compact(['tangap']));
    }

    public function show($id)
    {
        // $item = Prestasi::with([
        //     'details', 'user'
        // ])->findOrFail($id);
        // $item = Prestasi::findOrFail($id);
        // return view ('pages.mahasiswa.show',compact(['item']));
        // $tangap = Tanggapan::where('prestasi_id',$id)->first();
        // return view ('pages.mahasiswa.show',compact(['tangap']));
        $item = Prestasi::with([
            'details', 'user' 
        ])->findOrFail($id);

        return view('pages.mahasiswa.show',[
        'item' => $item
        ]);
        // $item = Prestasi::find($id);
        // $tangap = Tanggapan::where('prestasi_id')->first();

        // return view('pages.mahasiswa.show', [
        //     'item' => $item,
        //     'tangap' => $tangap
        // ]);
    }

}
