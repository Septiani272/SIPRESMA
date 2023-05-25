@extends('layouts.admin')

@section('title')
Data Mahasiswa
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Mahasiswa
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
           <div class="flex justify-between mb-4">
          <form action="{{ route('users.search') }}" method="GET" class="flex">
            <input type="text" name="q" placeholder="Cari pengguna..." class="px-2 py-1 border border-gray-300 rounded-md">
            <button type="submit" class="px-4 py-2 ml-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">Cari</button>
          </form>
          </div>
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class=" text-center text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">No</th>
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">NPM</th>
              <th class="px-4 py-3">No. Hp</th>
              <th class="px-4 py-3">Program Studi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @php
             $no = 1; 
           @endphp
            @forelse ($data as $index => $mahasiswa)
            <tr class=" text-center text-gray-700 dark:text-gray-400">
              <td scope="row">{{ $index +$data->firstItem() }}</td>
              <td class="px-4 py-3 text-sm">
                {{ $mahasiswa->name }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $mahasiswa->npm }}
              </td>
              <td class="px-4 py-3 text-sm">
                0{{ $mahasiswa->phone }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $mahasiswa->prodi }}
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
        {{-- {{ $data->links() }} --}}
      </div>

    </div>
    {{ $data->links() }}
  </div>
</main>
@endsection