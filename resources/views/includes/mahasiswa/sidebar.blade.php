<!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-50 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <img src="{{ asset('img/unib3.png')}}" alt=""
              class="inline-flex ml-3 items-center transform transition hover:scale-125 duration-300 ease-in-out"
              style="width: 40px; height: auto;" />
          <a
            class="ml-2 mr-2 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            SIPRESMA FT UNIB
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">

                <span class="{{ (request()->is('user')) ? 'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ': '' }}" style="background-color: #e57342 ; " 
                  aria-hidden="true"></span>

              <a class="inline-flex items-center w-full text-sm font-semibold  transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="{{ url('user')}} ">
                <i class="fas fa-home"></i>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>

          </ul>
          {{-- dropdown menu --}}
          <ul >
            <li class="relative px-6 py-2">
                <!-- Tombol dropdown -->
                <button class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 relative" id="dropdown">
                  <i class="fas fa-trophy"></i>
                  
                  <span class="ml-4 ">Data Prestasi </span>
                    <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7 7l3-3 3 3H7zm0 6l3 3 3-3H7z" clip-rule="evenodd" />
                    </svg>
                </button>
        
                <!-- Isi dropdown -->
                <ul class="absolute left-0 hidden mt-2 py-1 bg-gray-700 text-sm text-gray-300" id="dropdown-menu">
                  
                    <li>
                      <span
                        class="{{ (request()->is('user/prestasi/proses')) ?  'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ': '' }}" style="background-color: #e57342 ; " 
                        aria-hidden="true"></span>
                      <a href="{{ url('user/prestasi/proses')}}" class="block px-4 py-2 ml-6 hover:text-white ">Belum Diproses</a>
                    </li>
                    <li>
                      <span
                        class="{{ (request()->is('user/prestasi/perbaiki')) ?  'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ': '' }}" style="background-color: #e57342 ; " 
                        aria-hidden="true"></span>
                      <a href="{{ url('user/prestasi/perbaiki')}}" class="block px-4 py-2 ml-6 hover:text-white">Perlu Diperbaiki </a>
                    </li>
                    <li>
                      <span
                        class="{{ (request()->is('user/prestasi/selesai')) ?  'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ': '' }}" style="background-color: #e57342 ; " 
                        aria-hidden="true"></span>
                      <a href="{{ url('user/prestasi/selesai')}}" class="block px-4 py-2 ml-6 hover:text-white">Selesai Diproses</a>
                    </li>
                      
                </ul>
            </li>
        </ul>
        </div>
      </aside>
<!-- Mobile sidebar -->
<!-- Backdrop -->
<div
  x-show="isSideMenuOpen"
  x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
></div>
<aside
  class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
  x-show="isSideMenuOpen"
  x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0 transform -translate-x-20"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0 transform -translate-x-20"
  @click.away="closeSideMenu"
  @keydown.escape="closeSideMenu"
>
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <a
      class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
      href="#"
    >
      SIPRESMA
    </a>
    <ul class="mt-6">
      <li class="relative px-6 py-3">
        <span
          class="{{ (request()->is('user')) ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }} "
          aria-hidden="true"
        ></span>
        <a
          class="inline-flex items-center w-full text-sm font-semibold  transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
          href="{{ url('user')}} "
        >
          <i class="fas fa-home"></i>
          <span class="ml-4">Dashboard</span>
        </a>
      </li>
    </ul>
    {{-- dropdown menu --}}
    <ul>
      <li class="relative px-6 py-2">
        <!-- Tombol dropdown -->
        <button
          id="dropdown2"
          class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 relative"
        >
          <i class="fas fa-trophy"></i>

          <span class="ml-4 ">Data Prestasi </span>
          <svg
            class="w-4 h-4 ml-2 transform"
            fill="currentColor"
            viewBox="0 0 20 20"
          >
            <path
              fill-rule="evenodd"
              d="M7 7l3-3 3 3H7zm0 6l3 3 3-3H7z"
              clip-rule="evenodd"
            ></path>
          </svg>
        </button>

        <!-- Isi dropdown -->
        <ul
          id="dropdown-menu2"
          class="absolute left-0 hidden mt-2 py-1 bg-gray-700 text-sm text-gray-300"
        >
          <li>
            <span
              class="{{ (request()->is('user/prestasi/proses')) ? 'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ' : '' }}"
              style="background-color: #e57342;"
              aria-hidden="true"
            ></span>
            <a
              href="{{ url('user/prestasi/proses')}}"
              class="block px-4 py-2 ml-6 hover:text-white"
              >Belum Diproses</a
            >
          </li>
          <li>
            <span
              class="{{ (request()->is('user/prestasi/perbaiki')) ? 'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ' : '' }}"
              style="background-color: #e57342;"
              aria-hidden="true"
            ></span>
            <a
              href="{{ url('user/prestasi/perbaiki')}}"
              class="block px-4 py-2 ml-6 hover:text-white"
              >Perlu Diperbaiki</a
            >
          </li>
          <li>
            <span
              class="{{ (request()->is('user/prestasi/selesai')) ? 'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ' : '' }}"
              style="background-color: #e57342;"
              aria-hidden="true"
            ></span>
            <a
              href="{{ url('user/prestasi/selesai')}}"
              class="block px-4 py-2 ml-6 hover:text-white"
              >Selesai Diproses</a
            >
          </li>
        </ul>
      </li>
    </ul>
  </div>
  
</aside>

<script>
  // Mendapatkan elemen tombol dropdown dan menu dropdown
  const dropdownButton = document.querySelector('#dropdown');
  const dropdownMenu = document.querySelector('#dropdown-menu');
  const dropdownButton2 = document.querySelector('#dropdown2');
  const dropdownMenu2 = document.querySelector('#dropdown-menu2');

  // Menambahkan event listener pada tombol dropdown
  dropdownButton.addEventListener('click', function () {
    // Mengubah status tampilan menu dropdown
    dropdownMenu.classList.toggle('hidden');
  });
  dropdownButton2.addEventListener('click', function () {
    // Mengubah status tampilan menu dropdown
    dropdownMenu2.classList.toggle('hidden');
  });
</script>