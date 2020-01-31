<!DOCTYPE html>
<html>
<head>
<title>Document</title>
</head>
<body>
<center>Daftar Tabungan</center><br>
@foreach ($tabungan as $data)
Nama : {{$data->nama}}<br>
Nis  : {{$data->nis}}
@endforeach
</body>
</html>