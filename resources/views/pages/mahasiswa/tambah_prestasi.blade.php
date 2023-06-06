@extends('layouts.mahasiswa')

@section('title')
Dashboard
@endsection
@section('content')
<main class="h-full pb-16 overflow-y-auto">
  {{-- @foreach($liat as $li)
 <li>{{ $li->nik }}</li>
  @endforeach --}}
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
      Silahkan Laporkan Prestasi Mu!
    </h2>


    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }} </li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{ route('tambahprestasi')}} " method="POST" enctype="multipart/form-data">
      @csrf

      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <label class="block text-sm mt-4">
          <span class="text-gray-700 dark:text-gray-400">Nama Kegiatan</span>
            <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Masukkan Nama Kegiatan Mu" value="{{ old('nama_kegiatan')}}" required
            name="nama_kegiatan">
         </label>
         <label class="block text-sm mt-4">
          <span class="text-gray-700 dark:text-gray-400">Nama Dosen Pembimbing</span>
            <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Nama Dosen Pembimbing" value="{{ old('dospem')}}" 
            name="dospem">
         </label>
         <label class="block text-sm mt-4">
          <span class="text-gray-700 dark:text-gray-400">NIP</span>
            <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="NIP Dosen Pembimbing" value="{{ old('nip')}}" 
            name="nip">
         </label>
         <label class="block text-sm mt-4">
          <span class="text-gray-700 dark:text-gray-400">Jumlah PT Yang Mengikuti</span>
            <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Jumlah Perguruan Tinggi Yang Mengikuti" value="{{ old('jumlah_PT')}}" 
            name="jumlah_PT">
         </label>
         <label class="block text-sm mt-4">
          <span class="text-gray-700 dark:text-gray-400">Jumlah Peserta</span>
            <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Jumlah Peserta Kegiatan" value="{{ old('jumlah_peserta')}}" 
            name="jumlah_peserta">
         </label>
        <label class="block text-sm mt-4">
          <span class="text-gray-700 dark:text-gray-400">Bukti Prestasi</span>
            <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Masukkan Link Google Drive Yang Berisi Sertifikat , Foto Kegiatan, Foto Mendapat Penghargaan, Penyelenggara. dam Surat Tugas atau Undangan " value="{{ old('bukti')}}" required
            name="bukti">
         </label>
          <label class="block text-sm mt-4">
            <span class="text-gray-700 dark:text-gray-400">Tingkat Prestasi</span>
            <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Tingkat Prestasi Mu?" value="{{ old('tingkat')}}" required
            name="tingkat">
              <option selected>Pilih Tingkat Prestasi</option>
              <option value="Tingkat Internasional">Tingkat Internasional</option>
              <option value="Tingkat Nasional">Tingkat Nasional</option>
              <option value="Tingkat Regional">Tingkat Regional</option>
              <option value="Tingkat Universitas">Tingkat Universitas</option>
              <option value="Tingkat Provinsi">Tingkat Provinsi</option>
              <option value="Tingkat Kota">Tingkat Kota</option>
            </select>
          </label>

          <label class="block text-sm mt-4">
            <span class="text-gray-700 dark:text-gray-400">Prestasi Yang Dicapai</span>
            <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Prestasi Yang Kamu Capai?" value="{{ old('prestasi_yg_dicapai')}}" required
            name="prestasi_yg_dicapai">
              <option selected>Prestasi Yang Kamu Capai?</option>
              <option value="Juara I">Juara I</option>
              <option value="Juara II">Juara II</option>
              <option value="Juara III">Juara III</option>
              <option value="Harapan I">Harapan I</option>
              <option value="Harapan II">Harapan II</option>
              <option value="Harapan III">Harapan III</option>
            </select>
          </label>

          <label class="block text-sm mt-4">
            <span class="text-gray-700 dark:text-gray-400">Diperoleh</span>
            <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Tingkat Prestasi Mu?" value="{{ old('diperoleh')}}" required
            name="diperoleh">
              <option selected class=" text-gray-300">Pilih Perolehan</option>
              <option value="Tim">Tim</option>
              <option value="Perorangan">Perorangan</option>
            </select>
          </label>
          <label class="block text-sm mt-4">
            <span class="text-gray-700 dark:text-gray-400">Tanggal Mulai</span>
            <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="8" type="date" placeholder="Masukkan Tanggal Mulai Kegiatan" value="{{ old('tgl_mulai')}}" required
              name="tgl_mulai">
          </label>
          
          <label class="block text-sm mt-4">
            <span class="text-gray-700 dark:text-gray-400">Tanggal Selesai</span>
            <input class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="8" type="date" placeholder="Masukkan Tanggal Selesai Kegiatan" value="{{ old('tgl_mulai')}}" required
              name="tgl_selesai">
          </label>
          <label for="waktu_perolehan" class="block mt-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Tahun Perolehan</span>
            <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="date" value="{{ old('waktu_perolehan')}}" required
            name="waktu_perolehan">
             <?php 
             for($i = date('Y'); $i >=2010; $i--){
              echo '<option value ="'.$i.'">' .$i. '</option>';
             }
             ?>
            </select>
          </label>

        <button type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Submit
        </button>

      </div>
    </form>
</main>
@endsection