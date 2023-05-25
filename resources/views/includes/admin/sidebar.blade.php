<!-- Desktop sidebar -->
<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <img src="{{ asset('img/unib3.png')}}" alt=""
      class="inline-flex ml-3 items-center transform transition hover:scale-125 duration-300 ease-in-out"
      style="width: 40px; height: auto;" />

    <a class="ml-3 text-lg font-bold text-gray-800 dark:text-gray-200" href="/">
      SIPRESMA FT UNIB
    </a>

    
    <ul class="mt-6">
      <li class="relative px-6 py-2">
        <span class="{{ (request()->routeIs('dashboard')) ? 'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ': '' }}" style="background-color: #e57342 ; " 
          aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{ route('dashboard')}}">
          <i class="fas fa-home w-5 h-5"></i>
          <span class="ml-4">Dashboard</span>
        </a>
      </li>
    </ul>
    <ul>
      <li class="relative px-6 py-2">
        <span class="{{ (request()->routeIs('prestasi.index')) ? 'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ': '' }}" style="background-color: #e57342 ; " 
          aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{ route('prestasi.index')}}">
          <i class="fas fa-trophy w-5 h-5"></i>
          <span class="ml-4">Data Prestasi</span>
        </a>
      </li>
    </ul>
    <ul>
      <li class="relative px-6 py-2">
        <span class="{{ (request()->is('admin/mahasiswa')) ? 'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ': '' }}" style="background-color: #e57342 ; " 
          aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{ url('admin/mahasiswa')}}">
          <i class="fas fa-user-graduate w-5 h-5"></i>
          <span class="ml-4">Mahasiswa</span>
        </a>
      </li>
    </ul>
    
    @if( Auth::user()->roles == 'ADMIN') 
    </ul>
    @endif

    <ul>
      <li class="relative px-6 py-2">
        <span
          class="{{ (request()->is('admin/laporan')) ? 'absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg ': '' }}" style="background-color: #e57342 ; " 
          aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 relative"
          href="{{ url('admin/laporan')}}">
          <i class="fas fa-file-alt w-5 h-5"></i>
          <span class="ml-4">Laporan</span>
          <span class="ml-auto bg-red-500 text-white rounded-full px-2 py-1 text-xs"></span>
      
        </a>
      </li>
    </ul>
   <!-- Dropdown -->
   <ul >
    <li class="relative px-6 py-2">
        <!-- Tombol dropdown -->
        <button class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 relative" id="dropdown">
          <i class="fas fa-users w-5 h-5"></i>
          
          <span class="ml-4 ">Data Prestasi Prodi</span>
            <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7 7l3-3 3 3H7zm0 6l3 3 3-3H7z" clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Isi dropdown -->
        <ul class="absolute left-0 hidden mt-2 py-1 bg-gray-700 text-sm text-gray-300" id="dropdown-menu">
            <li><a href="{{ url('admin/laporan/informatika')}}" class="block px-4 py-2 ml-6 hover:text-white ">Prodi Informatika</a></li>
            <li><a href="{{ url('admin/laporan/teknik-sipil')}}" class="block px-4 py-2 ml-6 hover:text-white">Prodi Teknik Sipil </a></li>
            <li><a href="{{ url('admin/laporan/teknik-elektro')}}" class="block px-4 py-2 ml-6 hover:text-white">Prodi Teknik Elektro</a></li>
            <li><a href="{{ url('admin/laporan/teknik-mesin')}}" class="block px-4 py-2 ml-6 hover:text-white">Prodi Teknik Mesin</a></li>
            <li><a href="{{ url('admin/laporan/arsitektur')}}" class="block px-4 py-2 ml-6 hover:text-white">Prodi Arsitektur</a></li>
            <li><a href="{{ url('admin/laporan/sistem-informasi')}}" class="block px-4 py-2 ml-6 hover:text-white">Prodi Sistem Informasi</a></li>
        </ul>
    </li>
</ul>
  
  </div>
  
</aside>
<!-- Mobile sidebar -->
<!-- Backdrop -->
<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0"
  class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
  x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
  x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
  @keydown.escape="closeSideMenu">
  <div class="py-4 text-gray-500 dark:text-gray-400">
    <img src="{{ asset('img/unib3.png')}}" alt=""
      class="inline-flex ml-3 items-center transform transition hover:scale-125 duration-300 ease-in-out"
      style="width: 40px; height: auto;" />

    <a class="ml-3 text-lg font-bold text-gray-800 dark:text-gray-200" href="/">
      SIPRESMA FT UNIB
    </a>

    <ul class="mt-6">
      <li class="relative px-6 py-2">
        <span class="{{ (request()->routeIs('dashboard')) ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }} " aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{ route('dashboard')}}">
          <i class="fas fa-home w-5 h-5"></i>
          <span class="ml-4">Dashboard</span>
        </a>
      </li>
    </ul>
    <ul>
      <li class="relative px-6 py-2">
        <span class="{{ (request()->routeIs('prestasi.index')) ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }} " aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{ route('prestasi.index')}}">
          <i class="fas fa-trophy w-5 h-5"></i>
          <span class="ml-4">Data Prestasi</span>
        </a>
      </li>
    </ul>
    <ul>
      <li class="relative px-6 py-2">
        <span class="{{ (request()->is('admin/mahasiswa')) ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }} " aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{ url('admin/mahasiswa')}}">
          <i class="fas fa-user-graduate w-5 h-5"></i>
          <span class="ml-4">Mahasiswa</span>
        </a>
      </li>
    </ul>
    
    @if( Auth::user()->roles == 'ADMIN') 
    </ul>
    @endif


    <ul>
      <li class="relative px-6 py-2">
        <span
          class="{{ (request()->is('admin/laporan')) ? 'absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg' : '' }} "
          aria-hidden="true"></span>
        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 relative"
          href="{{ url('admin/laporan')}}">
          <i class="fas fa-file-alt w-5 h-5"></i>
          <span class="ml-4">Laporan</span>
          <span class="ml-auto bg-red-500 text-white rounded-full px-2 py-1 text-xs"></span>
      
        </a>
      </li>
    </ul>
    <ul >
      <li class="relative px-6 py-2">
          <!-- Tombol dropdown -->
          <button class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 relative" id="dropdown2">
            <i class="fas fa-users w-5 h-5"></i>
            
            <span class="ml-4 ">Data Prestasi Prodi</span>
              <svg class="w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M7 7l3-3 3 3H7zm0 6l3 3 3-3H7z" clip-rule="evenodd" />
              </svg>
          </button>
  
          <!-- Isi dropdown -->
          <ul class="absolute left-0 hidden mt-2 py-1 bg-gray-700 text-sm text-gray-300" id="dropdown-menu2">
              <li><a href="{{ url('admin/laporan/informatika')}}" class="block px-4 py-2 ml-6 hover:text-white ">Prodi Informatika</a></li>
              <li><a href="{{ url('admin/laporan/teknik-sipil')}}" class="block px-4 py-2 ml-6 hover:text-white">Prodi Teknik Sipil </a></li>
              <li><a href="{{ url('admin/laporan/teknik-elektro')}}" class="block px-4 py-2 ml-6 hover:text-white">Prodi Teknik Elektro</a></li>
              <li><a href="{{ url('admin/laporan/teknik-mesin')}}" class="block px-4 py-2 ml-6 hover:text-white">Prodi Teknik Mesin</a></li>
              <li><a href="{{ url('admin/laporan/arsitektur')}}" class="block px-4 py-2 ml-6 hover:text-white">Prodi Arsitektur</a></li>
              <li><a href="{{ url('admin/laporan/sistem-informasi')}}" class="block px-4 py-2 ml-6 hover:text-white">Prodi Sistem Informasi</a></li>
          </ul>
      </li>
  </ul>
  </div>
  <script>
    // Mendapatkan elemen tombol dropdown dan menu dropdown
    const dropdownButton = document.querySelector('#dropdown');
    const dropdownMenu = document.querySelector('#dropdown-menu');
    const dropdownButton2 = document.querySelector('#dropdown2');
    const dropdownMenu2 = document.querySelector('#dropdown-menu2');  
    // Menambahkan event listener pada tombol dropdown
    dropdownButton.addEventListener('click', function() {
        // Mengubah status tampilan menu dropdown
        dropdownMenu.classList.toggle('hidden');
    });
    dropdownButton2.addEventListener('click', function () {
    // Mengubah status tampilan menu dropdown
    dropdownMenu2.classList.toggle('hidden');
  });
</script>
</aside>
