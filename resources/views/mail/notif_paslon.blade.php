<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>{{ $kirim['title'] }}</h1>
    <p>{{ $kirim['body'] }}</p>
    @foreach($capaslon as $data)
   	<p><b>{{$data->nama_ketua}}</b> & <b>{{$data->nama_wakil}}</b> <b>LOLOS</b> Seleksi Menjadi Paslon</p>
   	@endforeach
   	<p>Persiapkan Diri Anda Untuk Tahap Berikutnya!</p>
    <p>Terima Kasih</p>
</body>
</html>