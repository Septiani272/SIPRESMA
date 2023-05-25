@extends('layouts.admin')

@section('title')
Detail Prestasi
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
    </h2>


    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <div class="px-4 py-3 mb-8 flex bg-white rounded-lg shadow-md dark:text-gray-400   dark:bg-gray-800">
          <div class="p-4">
            <h1 class="text-2xl text-left font-bold mb-4">{{ $item->title }}</h1>
        
            <div class="flex items-left mb-4">
              <table class="w-full">
                      <tr>
                          <th class="text-left  text-gray-500">Nama Mahasiswa</th>
                          <th class="text-gray-500 ">:</th>
                          <th class="text-left  font-bold ">{{ $item->user->name }}</th>
                      </tr>
                      <tr>
                          <th class="text-left  text-gray-500">NPM</th>
                          <th class="text-gray-500 ">:</th>
                          <th class="text-left font-bold">{{ $item->user->npm }}</th>
                      </tr>
                      <tr>
                         <th class=" text-left text-gray-500">Nama Kegiatan</th>
                         <th class="text-gray-500 ">:</th>
                         <th class="text-left font-bold">{{ $item->nama_kegiatan }}</th>
                      </tr>
                      <tr>
                         <th class=" text-left  text-gray-500">Dosen Pembimbing</th>
                         <th class="text-gray-500 ">:</th>
                          <th class="text-left  font-bold">{{ $item->dospem }}</th>
                      </tr>
                      <tr >
                          <th class="text-left text-gray-500">NIP</th>
                          <th class="text-gray-500 ">:</th>
                          <th class="text-left  font-bold">{{ $item->nip }}</th>
                      </tr>
                      <tr>
                          <th class="text-left text-gray-500">Prestasi Yang Dicapai</th>
                          <th class="text-gray-500 ">:</th>
                          <th class="text-left  font-bold">{{ $item->prestasi_yg_dicapai }}</th>
                      </tr>
                      <tr>
                        <th class="text-left text-gray-500">Bukti Prestasi </th>
                        <th class="text-gray-500 ">:</th>
                        <th>
                          <a href="{{ $item->bukti }}" target="_blank"  class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Detail">{{ $item->bukti }}</a>
                          </th> 
                      </tr>
                      <tr>
                          <th class="text-left text-gray-500">Waktu Perolehan</th>
                          <th class="text-gray-500 ">:</th>
                          <th class="text-left font-bold">{{ $item->waktu_perolehan }}</th>
                      </tr>
                      <tr>
                          <th class="text-left text-gray-500">Tingkat </th>
                          <th class="text-gray-500 ">:</th>
                          <th class="text-left font-bold">{{ $item->tingkat }}</th>
                      </tr>
                      <tr>
                          <th class="text-left text-gray-500">Jumlah PT Yang Mengikuti</th>
                          <th class="text-gray-500 ">:</th>
                          <th class="text-left font-bold">{{ $item->jumlah_PT }}</th>
                      </tr>
                      <tr>
                          <th class="text-left text-gray-500"> Jumlah Peserta</th>
                          <th class="text-gray-500 ">:</th>
                          <th class="text-left font-bold">{{ $item->jumlah_peserta }}</th>
                      </tr>
                      <tr>
                          <th class="text-left text-gray-500"> Diperoleh</th>
                          <th class="text-gray-500 ">:</th>
                          <th class="text-left font-bold">{{ $item->diperoleh }}</th>
                      </tr>
  

              </table>
          </div>
        
       
          </div>
        </div>
        <div class="text-center">
          <h2 class="text-lg  font-bold mb-2 ">Tanggapan:</h2>
          @if ($tangap)
              <p>{{ $tangap->tanggapan }}</p>
          @else
              <p>Belum ada tanggapan.</p>
          @endif
      </div>
        </div>
    </div>

   </div>
   @if ($item->status !== 'Selesai')
   <div class="flex justify-center my-4">
       <a href="{{ route('tanggapan.show', $item->id)}}"
           class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
           Berikan Tanggapan
       </a>
   </div>
@else
   <div class="flex justify-center my-4">
       <p>Sudah Ditanggapi</p>
   </div>
@endif


</main>
@endsection