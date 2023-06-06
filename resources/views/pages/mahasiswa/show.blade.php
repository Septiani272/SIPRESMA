@extends('layouts.mahasiswa')

@section('title')
Dashboard
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    


    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto"
      <div class="px-4 py-3 mb-8 flex bg-white rounded-lg shadow-md dark:text-gray-400   dark:bg-gray-800">
        <div class="p-4">
          <h1 class="text-2xl text-left font-bold mb-4">{{ $item->title }}</h1>
      
          <div class="flex items-left mb-4">
            <table class="w-full">
                    <tr>
                        <th class="text-left text-sm text-gray-500">Nama Mahasiswa</th>
                        <th class="text-gray-500 ">:</th>
                        <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Detail">{{ $item->user->name }}</th>
                    </tr>
                    <tr>
                        <th class="text-left text-sm text-gray-500">NPM</th>
                        <th class="text-gray-500 ">:</th>
                        <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Detail">{{ $item->user->npm }}</th>
                    </tr>
                    <tr>
                       <th class=" text-left text-sm text-gray-500">Nama Kegiatan</th>
                       <th class="text-gray-500 ">:</th>
                       <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                       aria-label="Detail">{{ $item->nama_kegiatan }}</th>
                    </tr>
                    <tr>
                       <th class=" text-left text-sm text-gray-500">Dosen Pembimbing</th>
                       <th class="text-gray-500 ">:</th>
                        <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Detail">{{ $item->dospem }}</th>
                    </tr>
                    <tr >
                        <th class="text-left text-sm text-gray-500">NIP</th>
                        <th class="text-gray-500 ">:</th>
                        <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Detail">{{ $item->nip }}</th>
                    </tr>
                    <tr>
                        <th class="text-left text-sm text-gray-500">Prestasi Yang Dicapai</th>
                        <th class="text-gray-500 ">:</th>
                        <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Detail">{{ $item->prestasi_yg_dicapai }}</th>
                    </tr>
                    <tr>
                      <th class="text-left text-sm text-gray-500">Bukti Prestasi </th>
                      <th class="text-gray-500 ">:</th>
                      <th>
                        <a href="{{ $item->bukti }}" target="_blank"  class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-red-400 focus:outline-none focus:shadow-outline-gray"
                          aria-label="Detail">{{ $item->bukti }}</a>
                        </th> 
                    </tr>
                    <tr>
                      <th class="text-left text-sm text-gray-500">Tanggal Mulai Kegiatan</th>
                      <th class="text-gray-500">:</th>
                      <th class="flex items-center justify-between text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray" aria-label="Detail">
                        {{ \Carbon\Carbon::parse($item->tgl_mulai)->format('d, F Y') }}
                      </th>
                    </tr>
                  <tr>
                    <th class="text-left text-sm text-gray-500">Tanggal Selesai Kegiatan</th>
                    <th class="text-gray-500">:</th>
                    <th class="flex items-center justify-between text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray" aria-label="Detail">
                      {{ \Carbon\Carbon::parse($item->tgl_selesai)->format('d, F Y') }}
                    </th>
                  </tr>
                  
                    <tr>
                        <th class="text-left text-sm text-gray-500">Tahun Perolehan</th>
                        <th class="text-gray-500 ">:</th>
                        <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Detail">{{ $item->waktu_perolehan }}</th>
                    </tr>
                    <tr>
                        <th class="text-left text-sm text-gray-500">Tingkat </th>
                        <th class="text-gray-500 ">:</th>
                        <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Detail">{{ $item->tingkat }}</th>
                    </tr>
                    <tr>
                        <th class="text-left text-sm text-gray-500">Jumlah PT Yang Mengikuti</th>
                        <th class="text-gray-500 ">:</th>
                        <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Detail">{{ $item->jumlah_PT }}</th>
                    </tr>
                    <tr>
                        <th class="text-left text-sm text-gray-500"> Jumlah Peserta</th>
                        <th class="text-gray-500 ">:</th>
                        <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Detail">{{ $item->jumlah_peserta }}</th>
                    </tr>
                    <tr>
                        <th class="text-left text-sm text-gray-500"> Diperoleh</th>
                        <th class="text-gray-500 ">:</th>
                        <th class="flex items-center justify-between  text-sm font-bold leading-5 text-black-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Detail">{{ $item->diperoleh }}</th>
                    </tr>


            </table>
        </div>
      
     
        </div>
      </div>
        <div class="px-4 py-3 mb-2 flex bg-white rounded-lg shadow-md dark:text-gray-400   dark:bg-gray-800">

          <div class="text-center flex-1 mt-4">
            <h1 class="mb-8 font-semibold">Tanggapan</h1>
            <p class="text-gray-800 dark:text-gray-400">

              @if (empty($tangap->tanggapan))
              Belum ada tanggapan
              @else
              {{ $tangap->tanggapan}}
              @endif
            </p>
          </div>
        </div>
      </div>
    </div>

</main>
@endsection