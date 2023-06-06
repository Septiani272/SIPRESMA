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
    <form action="{{ route('users.search') }}" method="GET" class="mb-4 flex justify-end">
      <input type="text" name="q" placeholder="Cari mahasiswa..." class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
      <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Cari</button>
    </form>
    <form action="{{ url('admin/mahasiswa')}}" class="mb-4">
       <label class="ml-4">
        Tampilkan:
        <select name="length" onchange="this.form.submit()" class="px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500">
          <option value="10" {{ Request::get('length') == 10 ? 'selected' : '' }}>10</option>
          <option value="25" {{ Request::get('length') == 25 ? 'selected' : '' }}>25</option>
          <option value="50" {{ Request::get('length') == 50 ? 'selected' : '' }}>50</option>
          <option value="100" {{ Request::get('length') == 100 ? 'selected' : '' }}>100</option>
        </select>
      </label>
     </form>
   

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

        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr class="text-center text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">No</th>
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">NPM</th>
              <th class="px-4 py-3">Jenis Kelamin</th>
              <th class="px-4 py-3">No. Hp</th>
              <th class="px-4 py-3">Program Studi</th>
              <th class="px-4 py-3">Aksi</th>
              {{-- <th class="px-4 py-3">Password</th>  --}}
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

            @php $no = 1; @endphp
            @forelse ($data as $index => $mahasiswa)
            <tr class="text-center text-gray-700 dark:text-gray-400">
              <td scope="row">{{ $index + $data->firstItem() }}</td>
              <td class="px-4 py-3 text-sm">
                {{ $mahasiswa->name }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $mahasiswa->npm }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $mahasiswa->jenis_kelamin }}
              </td>
              <td class="px-4 py-3 text-sm">
                0{{ $mahasiswa->phone }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $mahasiswa->prodi }}
              </td>
              {{-- <td class="px-4 py-3 text-sm ">
                <div>
                     <a href="editMahasiswa/{{$mahasiswa->npm}}" class="text-sm py-3 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 1100">
                      <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V285.7l-86.8 86.8c-10.3 10.3-17.5 23.1-21 37.2l-18.7 74.9c-2.3 9.2-1.8 18.8 1.3 27.5H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM549.8 235.7l14.4 14.4c15.6 15.6 15.6 40.9 0 56.6l-29.4 29.4-71-71 29.4-29.4c15.6-15.6 40.9-15.6 56.6 0zM311.9 417L441.1 287.8l71 71L382.9 487.9c-4.1 4.1-9.2 7-14.9 8.4l-60.1 15c-5.5 1.4-11.2-.2-15.2-4.2s-5.6-9.7-4.2-15.2l15-60.1c1.4-5.6 4.3-10.8 8.4-14.9z"/>
                    </svg>
                  </a>
                </div>
               
                 <div>
                  <form action="{{ route('mahasiswa.destroy', $mahasiswa->npm) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure you want to delete this?')" class="items-center justify-between text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-red-600 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                      <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                      </svg>
                    </button>
                 </div>
                  
                  </form>
                
               
              </td> --}}
              <td>
                {{-- <a href="{{ route('kebakaran.print', $kebakaran->id) }}" class="btn btn-info btn-sm"
                    target="_blank">
                    <i class="fas fa-print"></i>
                </a> --}}
                 <a href="editMahasiswa/{{$mahasiswa->npm}}" class=" items-center justify-between  text-sm font-medium leading-5 text-green-600 rounded-lg dark:text-green-600 focus:outline-none focus:shadow-outline-gray" aria-label="Detail">
                  Edit</a>
                </a>
                <form action="{{ route('mahasiswa.destroy', $mahasiswa->npm) }}" method="POST"
                    class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                        class="btn btn-danger btn-sm">
                       <span class=" items-center justify-between  text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-red-600 focus:outline-none focus:shadow-outline-gray" aria-label="Detail">
                        Hapus</span>
                    </button>
                </form>
            </td>
              
              {{-- <td class="px-4 py-3 text-sm">
                {{ $mahasiswa->password }}
              </td> --}}
            </tr>
            @empty
            <tr>
              <td colspan="5" class="text-center text-gray-400">
                Data Kosong
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
        
      </div>
    </div>
    {{ $data->links() }}
      </div>
    </main>
    @endsection
    
    
    
    
    
    
