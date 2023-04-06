<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Daftar Mahasiswa </h1>
        <ul>
            <li>
                Nama    : Farhan Anfasa Maulana <br>
                NIM     : 221402097 <br>
                Jurusan : Teknologi Infirmasi <br>
                
            </li>
            <form action="/detail_mahasiswa" method="GET">
                @csrf
                <button type="submit" class="btn btn-primary">Lihat Detail Mahasiwa [GET]</button>
            </form>
           
            
            <li>
                Nama    : Ghalbi Daffa  <br>
                NIM     : 221402103 <br>
                Jurusan : Teknologi Informasi <br>
            </li>
            <form action="/detail_mahasiswa" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Lihat Detail Mahasiwa [POST]</button>
            </form><br>
        </ul>
    </div>
    
</body>
</html>