<x-guest-layout >
    <x-auth-card >
        
        <x-slot name="logo" class="justify-content-center">
            <div class="flex items-center flex-shrink-0 text-black mr-6">
                <a href="/" class="flex flex-col items-center">
                  <img class="w-20 h-20 justify-content-center" src="{{ asset('img/unib3.png')}} " alt="Logo">
                  <span class="my-2 text-3xl font-bold leading-tight text-center" style="color: #17246A; font-family: 'Montserrat', sans-serif;">
                    SISTEM PELAPORAN
                  </span>
                  
                  <span class="my-2 text-3xl font-bold leading-tight text-center" style="color: #17246A; font-family: 'Montserrat', sans-serif;">
                    PRESTASI MAHASISWA
                  </span>
                  
                </a>
              </div>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 justify-content-center" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 " :errors="$errors" />

        <form method="POST" action="{{ route('login') }}" class="justify-center">
            
            
            @csrf
         
            <!-- Email Address -->
            <div>
                <x-label for="npm" :value="__('Nomor Pokok Mahasiswa')" />
                <x-input id="npm" class="block mt-1 w-full " type="text" name="npm" :value="old('npm')" required/>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
           
            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-3  bg-blue-500 text-white font-bold rounded-md my-3 py-3 px-4 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:bg-blue-500 hover:scale-105 duration-300 ease-in-out">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
        
    </x-auth-card>
</x-guest-layout>
