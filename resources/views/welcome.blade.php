<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIPRESMA FT UNIB</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('img/unib2.png')}}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Roboto', sans-serif;
    }
  </style>
</head>

<body class="leading-normal tracking-normal">

  <nav class="flex  justify-between flex-wrap bg-blue-200 p-5 px-20" style="background-color: #17246A;">
    <div class="flex items-center justify-left flex-shrink-0 text-white mr-6">
      <img src="{{ asset('img/unib2.png')}}" alt="" class="transform transition hover:scale-125 duration-300 ease-in-out" />
      <span class="font-bold tracking-wider text-xl">
        &nbsp SIPRESMA FT UNIB</span>

    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto text-center justify-end">
      <div>
        <button class="text-white font-normal rounded-md py-3 border-black px-4 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Masuk</a>
        </button>
        <button class="text-blue-500 font-medium rounded-md py-3 px-4 border-2 border-white focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('register')}}">Daftar</a>
        </button>
      </div>
    </div>
  </nav>

  <!-- Header -->

  <!--Hero-->
  <div class="pt-20 px-16 bg-blue-100">
    <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/6 justify-center items-start text-center md:text-left text-gray-800">
        <h1 class="my-4 text-4xl font-bold leading-tight">
          Layanan Pelaporan Prestasi Mahasiswa
        </h1>
        <button class="mx-auto lg:mx-0 bg-blue-500 text-white font-bold rounded-md my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <a href="{{ url('login')}}">Laporkan!</a>
        </button>
      </div>
      <!--Right Col-->
      <div class=" flex w-full md:w-3/5 justify-center ">
        <img class="object-fill mx-36 transform transition hover:scale-110 duration-300 ease-in-out" src="{{ asset('img/win.png')}}" />
      </div>
    </div>
  </div>

  <!-- How -->
  <div id="how" class="container my-20 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">
      <!-- Column -->
      <div class="my-1 px-1 w-full

 md:w-1/4 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Tulis" class="block h-auto w-100 lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out" src="{{ asset('img/tulis.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center ">
            <h1 class="text-lg font-bold">1. Isi Form Prestasi</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporkan Prestasi Dengan Jelas.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Proses" class="block h-auto w-100 lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out" src="{{ asset('img/processing.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">2. Proses Verifikasi</h1>
            <p class="text-grey-darker text-sm py-4">
              Tunggu sampai laporan Prestasi Anda di verifikasi.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Ditindak" class="block h-auto w-100 lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out" src="{{ asset('img/act.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">3. Tindak Lanjut</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporan Prestasi Anda sedang dalam tindak lanjut.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      <!-- Column -->
      <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/4">
        <!-- Article -->
        <article class="overflow-hidden rounded-lg shadow-lg text-gray-800">
          <img alt="Selesai" class="block h-auto w-100 lg:w-28 mx-auto my-10 transform transition hover:scale-125 duration-300 ease-in-out" src="{{ asset('img/verification.svg')}}" />
          <header class="leading-tight p-2 md:p-4 text-center">
            <h1 class="text-lg font-bold">4. Selesai</h1>
            <p class="text-grey-darker text-sm py-4">
              Laporan Prestasi telah selesai ditindak.
            </p>
          </header>
        </article>
        <!-- END Article -->
      </div>
      <!-- END Column -->
      
    </div>
    
  </div>
  <!-- Footer -->
  <footer class="text-center text-white font-medium bg-blue-200 py-5" style="background-color: #17246A;">
    <p class="font-family: 'Roboto', sans-serif;">Copyright© {{ now()->year }} SIPRESMA Fakultas Teknik Universitas Bengkulu
   </p>
  </footer>
  @include('sweetalert::alert')
</body>

</html>