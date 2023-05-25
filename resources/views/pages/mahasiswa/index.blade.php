@extends('layouts.mahasiswa')

@section('title')
Profil Mahasiswa
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200 item-center">
      Profile Mahasiswa
    </h2>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <table class="w-full whitespace-no-wrap">
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            <tr>
              <td class="px-4 py-3 text-sm font-semibold text-gray-500">Nama</td>
              <td class="px-4 py-3">{{ $mahasiswa->name }}</td>
            </tr>
            <tr>
              <td class="px-4 py-3 text-sm font-semibold text-gray-500">NPM</td>
              <td class="px-4 py-3">{{ $mahasiswa->npm }}</td>
            </tr>
            <tr>
              <td class="px-4 py-3 text-sm font-semibold text-gray-500">Jenis Kelamin</td>
              <td class="px-4 py-3">{{ $mahasiswa->jenis_kelamin }}</td>
            </tr>
            <tr>
              <td class="px-4 py-3 text-sm font-semibold text-gray-500">No. HP</td>
              <td class="px-4 py-3">0{{ $mahasiswa->phone }}</td>
            </tr>
            <tr>
              <td class="px-4 py-3 text-sm font-semibold text-gray-500">Program Studi</td>
              <td class="px-4 py-3">{{ $mahasiswa->prodi }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</main>

@endsection
