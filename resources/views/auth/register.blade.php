<x-guest-layout>
  
  <div class=" justify-center ">
      <x-auth-card>
          <x-slot name="logo" class=" flex justify-center">
              <div class="flex items-center flex-shrink-0 text-black mr-6">
                  <a href="/" class="flex flex-col items-center justify-center">
                      <img class="w-20 h-20 justify-center" src="{{ asset('img/unib3.png') }}" alt="Logo">
                      <span class="my-2 text-3xl font-bold justify-center text-center" style="color: #17246A; font-family: 'Montserrat', sans-serif;">
                        Sistem Pelaporan
                    </span>
                    <span class="my-2 text-3xl font-bold  justify-center text-center" style="color: #17246A; font-family: 'Montserrat', sans-serif;">
                        Prestasi Mahasiswa
                    </span>
                    
                  </a>
              </div>
          </x-slot>

          <!-- Validation Errors -->
          <x-auth-validation-errors class="mb-4" :errors="$errors" />

          <form method="POST" action="{{ route('register') }}" class="w-full">
              @csrf

              <!-- NIK -->
              <div>
                  <x-label for="npm" :value="__('NPM')" />
                  <input id="npm" class="block mt-1 w-full" type="text" name="npm" />
              </div>

              <!-- Name -->
              <div class="mt-4">
                  <x-label for="name" :value="__('Nama')" />
                  <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" />
              </div>

              <!-- Phone -->
              <div class="mt-4">
                  <x-label for="phone" :value="__('No. HP')" />
                  <input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" />
              </div>

              <!-- Password -->
              <div class="input-group mb-4 mt-4">
                  <x-label for="password" :value="__('Password')" />
                  <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
              </div>

              <!-- Prodi -->
              <div class="input-group mb-4">
                  <x-label for="prodi" :value="__('Prodi')" />
                  <select class="block mt-1 w-full" type="text" name="prodi">
                      <option selected>Pilih Program Studi</option>
                      <option value="Informatika">Informatika</option>
                      <option value="Teknik Sipil">Teknik Sipil</option>
                      <option value="Teknik Mesin">Teknik Mesin</option>
                      <option value="Teknik Elektro">Teknik Elektro</option>
                      <option value="Sistem Informasi">Sistem Informasi</option>
                      <option value="Arsitektur">Arsitektur</option>
                  </select>
              </div>

              <!-- Jenis Kelamin -->
              <div class="mt-4">
                  <x-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
                  <select class="block mt-1 w-full" type="text" name="jenis_kelamin">
                      <option selected>Pilih Jenis Kelamin</option>
                      <option value="Perempuan">Perempuan</option>
                      <option value="Laki-laki">Laki-laki</option>
                  </select>
              </div>

              <div class="flex items-center justify-end mt-4">
                  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                      {{ __('Already registered?') }}
                  </a>

                  <x-button class="ml-3 bg-blue-500 text-white font-bold rounded-md my-3 py-3 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:bg-blue-500 hover:scale-105 duration-300 ease-in-out">
                      {{ __('Register') }}
                  </x-button>
              </div>
          </form>
      </x-auth-card>
  </div>
</x-guest-layout>
