<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laporan</title>
  <style>
    img{
      height: 100px;;
    }

    hr.solid {
    border-top: 2px solid #3B82F6;
    }
  </style>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="title text-center mb-5">
      <h2>Layanan prestasi Mahasiswa </h2>
      <h5><a href="https://www.SIPRESMA.madfariz.my.id/" target="_blank">www.SIPRESMA.madfariz.my.id</a></h5>
    </div>
    <hr class="solid">

    <div>
      <h6>Laporan prestasi</h6>
      <h6>{{ $prestasi->created_at->format('l, d F Y') }}</h6>
    </div>
    <hr class="solid">
    <div class="row">
       <div  class="mt-3 mb-3 col-6">
      <h6>Nama : {{ $prestasi->user_name }}</h6>
      <h6>NIK : {{ $prestasi->user_npm }}</h6>      
      <h6>No. Telepon : 0{{ $prestasi->user->phone }}</h6>      
    </div>
    <div  class="mt-3 mb-3 col-3">
      <h6>Nama : {{ $prestasi->user_name }}</h6>
      <h6>NIK : {{ $prestasi->user_npm }}</h6>      
      <h6>No. Telepon : 0{{ $prestasi->user->phone }}</h6>      
    </div>
    </div>
   

    <table class="table table-bordered">
      <thead class="thead">
        <tr>
          <th scope="col">Laporan prestasi</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <td>{{ $prestasi->nama_kegiatan }}</td>
        <td>{{ $prestasi->status }}</td>
      </tbody>
    </table>
  </div>
</body>
</html>