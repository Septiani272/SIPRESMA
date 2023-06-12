<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SIPRESMA | Pelaporan Prestasi Mahasiswa</title>
  
  <style>
    
     h4 {
        font-family: "Times New Roman", Times, serif;
        letter-spacing: 0.5px;
        font-size: 30px;
    }
    px{
      font-family: "Times New Roman", Times, serif;
      font-weight: bold;
      letter-spacing: 0.5px;
      font-size: 30px;
    }
    p{
      font-family: "Times New Roman", Times, serif;
      letter-spacing: 0.1px;
      font-weight: 500;
      
    }
    .col img {
        width: 100%;
        height: auto;
    }
    img{
      height: 100px;;
    }

    hr.solid {
    border-top: 4px solid #000000;
    }
    .thead{
    background-color: #ffffff;
    color: #000000;
    font-family: "Times New Roman", Times, serif;
    text-align: center;
    
    
    }
    td {
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="row align-items-center">
      <div class="col">
          <img src="{{ asset('img/unib4.png') }}" alt="Kota Bengkulu.png"
              class="img-fluid"  />
      </div>
      <div class="col-10">
          <div style="transform: translateX(-2rem)">
              <h4 class="text-center"style="margin-bottom: 5px;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN,</h4>
              <h4 class="text-center"style="margin-bottom: 5px;">RISET DAN TEKNOLOGI,</h4>
              <h4 class="text-center" style="margin-bottom: 5px;">UNIVERSITAS BENGKULU</hclass=>
              <h4 class="text-center font-weight-bold" style="margin-bottom: 5px;">FAKULTAS TEKNIK</h4>
              <!-- <h1 class="text-center">KELURAHAN TENGAH PADANG</h1> -->
              <p class="text-center"style="margin-bottom: 0;" >Jalan W.R. Supratman Kandang Limun Bengkulu 38371</p>
              <p class="text-center"style="margin-bottom: 0;" >Telepon (0736) 344087 Ext. 308 Faksimile (0736) 349134</p>
              <p class="text-center" style="margin-bottom: 0;" >Laman: ft.unib.ac.id e-mail: ft@unib.ac.id</p>
          </div>

      </div>
  </div>
  <div class="line" style="margin-top: -1rem">
    <hr style="border:3px solid #000">
    <hr style="border:.5px solid #000; margin-top: -15px">
</div>
    <div>
      <h5 style="font-family: 'Times New Roman', Times, serif; text-align: center;" class="mb-4 font-weight-bold">Laporan Prestasi Mahasiswa Fakultas Teknik</h5>

    </div>
    <table class="table table-bordered">
      <thead class="thead ">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Mahasiswa</th>
          <th scope="col">Nama Kegiatan</th>
          <th scope="col">Tahun</th>
          <th scope="col">Tingkat</th>
          <th scope="col">Prestasi Yang Dicapai</th>
          <th scope="col">Bukti</th>
          {{-- <th scope="col">Status</th> --}}
        </tr>
      </thead>
      <tbody>
        @php
        $no = 1; 
      @endphp
        @foreach($prestasi as $item)
          
        <tr>
          <td>{{ $no ++ }} </td>
          <td>{{ $item->user_name }}</td>
          <td>{{ $item->nama_kegiatan }}</td>
          <td>{{ $item->waktu_perolehan }}</td>
          <td>{{ $item->tingkat}}</td>
          <td>{{ $item->prestasi_yg_dicapai }}</td>
          <td class="px-4 py-3 text-sm">
            
            <a href="{{ $item->bukti }}" target="_blank"  class="flex items-center justify-between  text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-purple-400 focus:outline-none focus:shadow-outline-gray"
              aria-label="Detail">Link Bukti</a>
            
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <script type="text/javascript">
        window.print();
  </script>
</body>

</html>