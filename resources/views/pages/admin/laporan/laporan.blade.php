@extends('layouts.admin')

@section('title')
Laporan
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <div class="my-6 mb-6 flex justify-end">
      <a href="{{ url('admin/laporan/cetak')}} "
        class="px-6 py-3  font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        target="_blank">
      <span>Cetak</span>
      <i class="fas fa-print w-5 h-5 ml-2" ></i>
      </a>
      
    </div>

    <form action="{{ url('admin/laporan')}}" class="mb-4">
      <label class="ml-4">
       Tampilkan:
       <select name="length" onchange="this.form.submit()" class="px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
         <option value="10" {{ Request::get('length') == 10 ? 'selected' : '' }}>10</option>
         <option value="25" {{ Request::get('length') == 25 ? 'selected' : '' }}>25</option>
         <option value="50" {{ Request::get('length') == 50 ? 'selected' : '' }}>50</option>
         <option value="100" {{ Request::get('length') == 100 ? 'selected' : '' }}>100</option>
       </select>
     </label>
    </form> 

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
              <th class="px-4 py-3">No</th>
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">Prodi</th>
              <th class="px-4 py-3">Nama Kegiatan</th>
              <th class="px-4 py-3">Tingkat</th>
              <th class="px-4 py-3">Prestasi Yang Dicapai</th>
              <th class="px-4 py-3">Aksi</th>

            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @php
            $no = 1; 
          @endphp
          
            @forelse ($prestasi as $index => $item)
            <tr class="text-center text-gray-700 dark:text-gray-400 ">
              <td scope="row">{{$index +$prestasi->firstItem() }}</td>
              <td class="px-4 py-3 text-sm">
                {{ $item->user_name }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $item->user_prodi }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $item->nama_kegiatan }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $item->tingkat }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $item->prestasi_yg_dicapai}}
              </td>
              {{-- <td class="px-4 py-3 text-sm">
                {{ $item->status=='Selesai' }}
              </td> --}}
              
              <td class="px-4 py-3 text-xs items-center">
                <div class="flex items-center space-x-4 text-sm">

                  <a href="{{ route('prestasi.show', $item->id)}} "
                    class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
                    aria-label="Detail">

                    <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                  </a>
                  {{-- <form action="{{ route('prestasi.destroy', $item->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button
                      onclick="return confirm('Are you sure you want to delete this?')"
                      class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                      aria-label="Delete">
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                          clip-rule="evenodd"></path>
                      </svg>
                    </button>
                  </form> --}}
                </div>
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
    {{ $prestasi->links() }}
  </div>
</main>
@endsection