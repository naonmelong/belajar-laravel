<!DOCTYPE html>
<html>
<head>
<title>Document</title>
</head>
<body>
<center>Daftar Tabungan Perorangan</center><br>
@foreach ($tabungan as $data)
Nama : {{$data->nama}}<br>
Nis  : {{$data->nis}}<br>
Kelas : {{$data->kelas}}<br>
Jumlah : {{$data->jml}}<br>
@if(tabungan->jml >25000)
paket tabungan :<A>
@elseif(tabungan->jml >10000)
paket tabungan :<B>
@else
paket tabungan :<c>
@endif
</body>
</html>