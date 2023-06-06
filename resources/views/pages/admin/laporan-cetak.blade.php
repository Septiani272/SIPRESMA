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
    <div class="row justify-content-center">
      <div class="col text-center">
        <img src="{{ asset('img/unib4.png')}}" alt="" style="width: 200px;">
      </div>
      <div class="col-md-auto text-center" style="letter-spacing: 1px;">
        <div class="title">
          <h4 style="margin-bottom: 5px; font-weight: 500;">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, </h4>
          <h4 style="margin-bottom: 5px; font-weight: 500;">RISET DAN TEKNOLOGI</h4>
          <h4 style="margin-bottom: 5px; font-weight: 500;">UNIVERSITAS BENGKULU</h4>
          <h4 style="margin-bottom: 5px; font-weight: bold;">FAKULTAS TEKNIK</h4>
          <p style="margin-bottom: 2px;">Jalan W.R. Supratman Kandang Limun Bengkulu 38371</p>
          <P style="margin-bottom: 2px;">Telepon (0736) 344087 Ext. 308 Faksimile (0736) 349134</P>
          <p style="margin-bottom: 0;">Laman: ft.unib.ac.id Email: ft@unib.ac.id</p> 
        </div>
      </div>
      <div class="col"></div>
    </div>
    
    
    <hr class="solid mt-2 mb-6">
    
    <div>
      <h2 style="font-family: 'Times New Roman', Times, serif; text-align: center;" class="mb-4">Laporan Prestasi Mahasiswa Fakultas Teknik</h2>

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