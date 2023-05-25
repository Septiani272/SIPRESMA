<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PrestasiController extends Controller
{
    public function index(request $request)
    {

        // $tanggapan = Tanggapan::all();
        // return view ('pages.admin.prestasi.index',compact(['tanggapan']));
        $selectedId = $request->id;
        $items = Prestasi::orderBy('created_at', 'DESC')->whereNotIn('status',['Selesai'] )->paginate(5);
        return view('pages.admin.prestasi.index', [
            'items' => $items,
            'selectedId'=>$selectedId
        ]);
        
        //  return view('pages.admin.prestasi.index', compact( 'driveUrl'));
    }
    public function show($id)
    {
        $item = Prestasi::with([
            'details', 'user'
        ])->findOrFail($id);

        $tangap = Tanggapan::where('prestasi_id', $id)->first();

        return view('pages.admin.prestasi.detail', [
            'item' => $item,
            'tangap' => $tangap,
        ]);

    }
    public function detail_laporan ($id)
    {
        $item = Prestasi::with([
            'details', 'user'
        ])->findOrFail($id);

        $tangap = Tanggapan::where('prestasi_id', $id)->first();

        return view('pages.admin.laporan.detail', [
            'item' => $item,
            'tangap' => $tangap,
        ]);

    }


    public function lihat($id)
    {
       
        $item = Prestasi::with([
            'details', 'user'
        ])->findOrFail($id);

        $tangap = Tanggapan::where('prestasi_id', $id)->first();

        return view('pages.mahasiswa.show', [
            'item' => $item,
            'tangap' => $tangap,
        ]);
        
    }
    public function update(Request $request, $id)
    {
        $status->update($data);
        return redirect('admin/prestasis');
    }
    public function destroy($id)
    {
        $prestasi = Prestasi::find($id);
        $prestasi->delete();

        Alert::success('Berhasil', 'prestasi telah di hapus');
        return redirect('user/prestasi');
    }
    
}
