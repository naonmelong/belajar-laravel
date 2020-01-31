<!DOCTYPE html>
<html>
<head>
<title>Document</title>
</head>
<body>
<center> Daftar Siswa Abadi </center><br>
@foreach ($data as $values)
Nama : {{$value['nama']}}<br>
Kelas : {{$value['kelas']}}
@endforeach
</body>
</html>