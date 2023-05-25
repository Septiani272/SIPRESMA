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
          <thead >
            <tr
              class="text-center text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">

              <th class="px-4 py-3">Nama Kegiatan</th>
              <th class="px-4 py-3">Waktu Perolehan</th>
              <th class="px-4 py-3">Tingkat</th>
              <th class="px-4 py-3">Prestasi Yang Dicapai</th>
              {{-- <th class="px-4 py-3">Perolehan </th>
              <th class="px-4 py-3">Bukti</th> --}}
              <th class="px-4 py-3">Status</th>
              <th class="px-4 py-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="  bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($items as $item)
            <tr class="text-center text-gray-700 dark:text-gray-400">
              <td>{{$item->nama_kegiatan}}</td>
              <td>{{$item->waktu_perolehan}}</td>
              <td>{{$item->tingkat}}</td>
              <td>{{$item->prestasi_yg_dicapai}}</td>
              {{-- <td class="px-4 py-3 text-sm">
                {{-- <a href="{{ $driveUrl = 'https://drive.google.com/drive/folders/' . $item->bukti; }}" target="_blank"  class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                aria-label="Detail">Buka Bukti  di Google Drive</a> --}}
                {{-- <a href="{{ $item->bukti }}" target="_blank"  class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                  aria-label="Detail">Buka Bukti Di Google Drive</a> --}}
                
              {{-- </td>  --}}
              @if($item->status =='Belum di Proses')
              <td class="px-4 py-3 text-xs">
                <span
                  class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                  {{ $item->status }}
                </span>
              </td>
              @elseif ($item->status =='Perlu Diperbaiki')
              <td class="px-4 py-3 text-xs">
                <span
                  class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                  {{ $item->status }}
                </span>
              </td>
              @else
              <td class="px-4 py-3 text-xs">
                <span
                  class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                  {{ $item->status }}
                </span>
              </td>

              @endif
              {{-- <td >
                <a href="detailprestasi/{{$item->id}}" class=" items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Detail">
                  Lihat</a>
              </td> --}}
        
              <td class="px-4 py-3 text-xs item-center">
                
                <a href="detailprestasi/{{$item->id}}" class=" items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-purple-600 focus:outline-none focus:shadow-outline-gray" aria-label="Detail">
                  Detail</a>
                
              
                <form action="{{ $item->status != 'selesai' ? route('prestasi.destroy', $item->id) : '#' }}" method="POST">
                    @csrf
                    @method('POST')
                    <button
                      onclick="return confirm('Are you sure you want to delete this?')"
                      class=" items-center justify-between  text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-red-600 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Delete">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                          clip-rule="evenodd"></path>
                      </svg>
                    </button>
                  </form>
              </td>

            </tr>
            @empty
            <tr>
              
              
              <td colspan="7" class="text-center text-gray-400">
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