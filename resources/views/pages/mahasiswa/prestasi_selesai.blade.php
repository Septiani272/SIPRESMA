@extends('layouts.mahasiswa')

@section('title')
Data Prestasi
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200 item-center">
      Data Prestasi
    </h2>
    <div class="text-right mb-4">
      <a href="{{ url('user/prestasi/TambahData')}}" class="px-4 py-2 font-semibold leading-tight text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
        Tambah Data
      </a>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-center text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">

              <th class="px-4 py-3">Nama Kegiatan</th>
              <th class="px-4 py-3">Waktu Perolehan</th>
              <th class="px-4 py-3">Tingkat</th>
              <th class="px-4 py-3">Prestasi Yang Dicapai</th>
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($items as $item)
            <tr class="text-center text-gray-700 dark:text-gray-400">
              <td>{{$item->nama_kegiatan}}</td>
              <td>{{$item->waktu_perolehan}}</td>
              <td>{{$item->tingkat}}</td>
              <td>{{$item->prestasi_yg_dicapai}}</td>
              <td class="px-4 py-3 text-xs">
                @if($item->status =='Belum di Proses')
                <span
                  class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                  {{ $item->status }}
                </span>
                @elseif ($item->status =='Perlu Diperbaiki')
                <span
                  class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                  {{ $item->status }}
                </span>
                @else
                <span
                  class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                  {{ $item->status }}
                </span>
                @endif
              </td>
              <td class="px-4 py-3 text-xs item-center">
                <a href="detailprestasi/{{$item->id}}" class="items-center justify-between text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-purple-600 focus:outline-none focus:shadow-outline-gray" aria-label="Detail">
                  Detail
                </a>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="6" class="text-center text-gray-400">
                Data Kosong
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

   

  </div>
</main>
@endsection
