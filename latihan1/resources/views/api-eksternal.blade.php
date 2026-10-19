<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data dari API</title>
</head>
<body>
<h1>Daftar Postingan dari API</h1>
@if(empty($data))
<p>Gagal mengambil data atau data kosong.</p>
@else
<ul>
@foreach ($data as $post)
<li>
<strong>{{ $post['name'] }}</strong>
<p>{{ $post['username'] }}</p>
</li>
@endforeach
</ul>
@endif
</body>
</html>