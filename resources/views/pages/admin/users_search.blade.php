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
        <!-- ... -->
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr class="text-center text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">No</th>
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">NPM</th>
              <th class="px-4 py-3">No. Hp</th>
              <th class="px-4 py-3">Program Studi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            <!-- Looping hasil pencarian -->
            @forelse ($users as $index => $user)
            <tr class=" text-center text-gray-700 dark:text-gray-400">
              <td scope="row">{{ $index + 1 }}</td>
              <td class="px-4 py-3 text-sm">
                {{ $user->name }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $user->npm }}
              </td>
              <td class="px-4 py-3 text-sm">
                0{{ $user->phone }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $user->prodi }}
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center text-gray-400">
                Tidak ditemukan mahasiswa dengan kata kunci "{{ $searchQuery }}"
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
