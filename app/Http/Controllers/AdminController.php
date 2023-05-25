<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;

use App\Models\Prestasi;
// use App\Models\prestasi;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
    public function __invoke()
    {
    }

    public function index($id)
    {

        $item = Prestasi::with([
            'details', 'user'
        ])->findOrFail($id);

        return view('pages.admin.tanggapan.add', [
            'item' => $item
        ]);
    }

    public function mahasiswa(Request $request)
    { $length = $request->input('length', 10); // Default to 10 records per page
        $data = DB::table('users')
        ->where('roles', '=', 'USER')
        ->paginate($length);
        // nanti diubah datanya jadi 10 aja

            return view('pages.admin.mahasiswa', compact('data'));
        
    }

    public function edit($npm)
    {
        $user = User::where('npm', $npm)->first();

        return view('pages.admin.editMahasiswa', compact('user'));
    }
    public function update(Request $request, $npm)
    {
        $user = User::where('npm', $npm)->first();

        if (!$user) {
            return redirect()->back()->withErrors('User not found');
        }

        // Validasi input data pengguna, sesuaikan dengan kebutuhan Anda
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'npm' => 'required|string|max:10',
            'prodi' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|in:Laki-Laki,Perempuan',
            'password' => 'required|string|min:8',
        ]);

        // Update data pengguna
        $user->name = $validatedData['name'];
        $user->npm = $validatedData['npm'];
        $user->prodi = $validatedData['prodi'];
        $user->jenis_kelamin = $validatedData['jenis_kelamin'];
        $user->password = bcrypt($validatedData['password']);
        // Lakukan update pada atribut-atribut lainnya yang perlu diperbarui

        // Simpan perubahan
        $user->save();
        Alert::success('Berhasil', 'Data Mahasiswa Berhasil Di Update');
        // Redirect ke halaman yang sesuai atau tampilkan pesan sukses
        return redirect('admin/mahasiswa');
    }


    public function destroy($npm)
{
    $mahasiswa = User::where('npm', $npm)->first();

    if ($mahasiswa) {
        $mahasiswa->delete();
        Alert::success('Berhasil', 'Mahasiswa telah di hapus');
        return redirect('admin/mahasiswa');
        // tambahkan logika lainnya, seperti redirect atau response
    } else {
        // handle jika mahasiswa tidak ditemukan
    }
}

    public function search(Request $request)
    {
        $searchQuery = $request->input('q');
        $users = User::where('name', 'LIKE', '%' . $searchQuery . '%')
                      ->orWhere('npm', 'LIKE', '%' . $searchQuery . '%')
                      ->orWhere('prodi', 'LIKE', '%' . $searchQuery . '%')
                      ->orWhere('phone', 'LIKE', '%' . $searchQuery . '%')
                      ->get();
        
        return view('pages.admin.users_search', compact('users', 'searchQuery'));
    }

    public function laporan(Request $request)
    {
        $length = $request->input('length', 10); // Default to 10 records per page
        // $prestasi = Prestasi::orderBy('created_at', 'DESC')->get();
        $prestasi = DB::table('prestasis')
        ->where('status', '=', 'Selesai')
        ->orderBy('created_at','desc')
        ->paginate($length);

        return view('pages.admin.laporan.laporan', [
            'prestasi' => $prestasi
        ]);
    }
    public function laporan_informatika(Request $request)
    {
        $length = $request->input('length', 10); // Default to 10 records per page
        $prestasi = DB::table('prestasis')
                    ->where('status', '=', 'Selesai')
                    ->where('user_prodi', '=', 'Informatika')
                    ->orderBy('created_at', 'desc')
                    ->paginate($length);
    
        return view('pages.admin.laporan.laporan_informatika', [
            'prestasi' => $prestasi
        ]);
    }
    public function laporan_TM(Request $request)
    {
        $length = $request->input('length', 10); // Default to 10 records per page
        $prestasi = DB::table('prestasis')
                    ->where('status', '=', 'Selesai')
                    ->where('user_prodi', '=', 'Teknik Mesin')
                    ->orderBy('created_at', 'desc')
                    ->paginate($length);
    
        return view('pages.admin.laporan.laporan_TM', [
            'prestasi' => $prestasi
        ]);
    }
    public function laporan_TS(Request $request)
    {
        $length = $request->input('length', 10); // Default to 10 records per page
        $prestasi = DB::table('prestasis')
                    ->where('status', '=', 'Selesai')
                    ->where('user_prodi', '=', 'Teknik Sipil')
                    ->orderBy('created_at', 'desc')
                    ->paginate($length);
    
        return view('pages.admin.laporan.laporan_TS', [
            'prestasi' => $prestasi
        ]);
    }
    public function laporan_TE(Request $request)
    {
        $length = $request->input('length', 10); // Default to 10 records per page
        $prestasi = DB::table('prestasis')
                    ->where('status', '=', 'Selesai')
                    ->where('user_prodi', '=', 'Teknik Elektro')
                    ->orderBy('created_at', 'desc')
                    ->paginate($length);
    
        return view('pages.admin.laporan.laporan_TE', [
            'prestasi' => $prestasi
        ]);
    }
    public function laporan_Arsitektur(Request $request)
    {
        $length = $request->input('length', 10); // Default to 10 records per page
        $prestasi = DB::table('prestasis')
                    ->where('status', '=', 'Selesai')
                    ->where('user_prodi', '=', 'Arsitektur')
                    ->orderBy('created_at', 'desc')
                    ->paginate($length);
    
        return view('pages.admin.laporan.laporan_Arsitektur', [
            'prestasi' => $prestasi
        ]);
    }
    public function laporan_SI(Request $request)
    {
        $length = $request->input('length', 10); // Default to 10 records per page
        $prestasi = DB::table('prestasis')
                    ->where('status', '=', 'Selesai')
                    ->where('user_prodi', '=', 'Sistem Informasi')
                    ->orderBy('created_at', 'desc')
                    ->paginate($length);
    
        return view('pages.admin.laporan.laporan_SI', [
            'prestasi' => $prestasi
        ]);
    }
    

    public function cetak()
    {

        $prestasi = Prestasi::where('status', 'Selesai')
        ->orderBy('created_at', 'DESC')
        ->get();
        return view ( 'pages.admin.laporan-cetak',compact('prestasi'));

        // $pdf = PDF::loadview('pages.admin.laporan-cetak', [
        //     'prestasi' => $prestasi
        // ]);
        // return $pdf->download('laporan.pdf');
    }

    public function cetak_informatika()
    {

        $prestasi = Prestasi::where('status', 'Selesai')
        ->where('user_prodi','Informatika')
        ->orderBy('created_at', 'DESC')
        ->get();

        return view ( 'pages.admin.laporan-cetak_prodi',compact('prestasi'));
    }

     
    public function cetak_arsitektur()
    {

        $prestasi = Prestasi::where('status', 'Selesai')
        ->where('user_prodi','Arsitektur')
        ->orderBy('created_at', 'DESC')
        ->get();

        return view ( 'pages.admin.laporan-cetak_prodi',compact('prestasi'));
    }
     
    public function cetak_TS()
    {

        $prestasi = Prestasi::where('status', 'Selesai')
        ->where('user_prodi','Teknik Sipil')
        ->orderBy('created_at', 'DESC')
        ->get();

        return view ( 'pages.admin.laporan-cetak_prodi',compact('prestasi'));
    }

     
    public function cetak_TM()
    {

        $prestasi = Prestasi::where('status', 'Selesai')
        ->where('user_prodi','Teknik Mesin')
        ->orderBy('created_at', 'DESC')
        ->get();

        return view ( 'pages.admin.laporan-cetak_prodi',compact('prestasi'));
    }

     
    public function cetak_TE()
    {

        $prestasi = Prestasi::where('status', 'Selesai')
        ->where('user_prodi','Teknik Elektro')
        ->orderBy('created_at', 'DESC')
        ->get();

        return view ( 'pages.admin.laporan-cetak_prodi',compact('prestasi'));
    }

     
    public function cetak_SI()
    {

        $prestasi = Prestasi::where('status', 'Selesai')
        ->where('user_prodi','Sistem Informasi')
        ->orderBy('created_at', 'DESC')
        ->get();

        return view ( 'pages.admin.laporan-cetak_prodi',compact('prestasi'));
    }

    public function pdf($id)
    {

        $prestasi = Prestasi::find($id);
        return view ( 'pages.admin.prestasi.cetak',compact('prestasi'));
        // $pdf = PDF::loadview('pages.admin.prestasi.cetak', compact('prestasi'))->setPaper('a4');
        // return $pdf->download('laporan-prestasi.pdf');
    }
}
