@extends('layouts.admin')

@section('title')
Edit Data Mahasiswa
@endsection


@section('content')
  <div class="container mx-auto">
    <div class="max-w-md mx-auto mt-10">
      <div class="bg-grey p-8 rounded shadow">
        <h1 class="text-xl font-bold mb-6">Edit User</h1>

        <form action="{{ route('mahasiswa.update', $user->npm) }}" method="POST">
          @csrf
          @method('POST')

          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input id="name" type="text" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 @error('name') border-red-500 @enderror" name="name" value="{{ old('name', $user->name) }}" required autofocus>

            @error('name')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-4">
            <label for="npm" class="block text-sm font-medium text-gray-700">NPM</label>
            <input id="npm" type="text" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 @error('npm') border-red-500 @enderror" name="npm" value="{{ old('npm', $user->npm) }}" required>

            @error('npm')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-4">
            <label for="prodi" class="block text-sm font-medium text-gray-700">Prodi</label>
            <input id="prodi" type="text" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 @error('prodi') border-red-500 @enderror" name="prodi" value="{{ old('prodi', $user->prodi) }}" required>

            @error('prodi')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-4">
            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
            <select id="jenis_kelamin" class="form-select mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 @error('jenis_kelamin') border-red-500 @enderror" name="jenis_kelamin" required>
              <option value="Laki-Laki" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
              <option value="Perempuan" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>

            @error('jenis_kelamin')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" type="password" class="form-input mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 @error('password') border-red-500 @enderror" name="password" required>

            @error('password')
              <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
          </div>

          <!-- Tambahkan atribut lainnya yang ingin Anda edit -->
          <button type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Submit
             </button>
         
        </form>
      </div>
    </div>
  </div>


</main>
@endsection
