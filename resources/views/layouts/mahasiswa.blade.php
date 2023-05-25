<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title') </title>

  @include('includes.mahasiswa.style')
</head>

<body>
  <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    @include('includes.mahasiswa.sidebar')
    <div class="flex flex-col flex-1 w-full">

      @include('includes.mahasiswa.navbar')
  

      @yield('content')

      @include('includes.mahasiswa.footer')
    </div>
  </div>
  @include('sweetalert::alert')
  @include('includes.mahasiswa.script')
</body>

</html>