<!DOCTYPE html>
<html>
<head>
<title>1461900174</title>
</head>
<body>
<center><h10>DATA USER PASIEN</h10></center>
<center><p>Cari :</p></center>
<center><form action="/pasien/cari" method="GET"></center>
<center><input type="text" name="lihat" placeholder="Cari Pasien .." value="{{ old('cari') }}"><center>
<br/>
<center><input type="submit" value="CARI"></center>
</form>
<br>
<center><form action="/pasien/kamar" method="GET"></center>
<center><input type="text" name="lihat" placeholder="Cari Kamar" value="{{ old('cari') }}"></center>
<br/><center><input type="submit" value="CARI"></center>
<br/>
</form>
<br/>
<center><a href="/pasien/tambah"> Tambah User Baru </a></center>
<br/>
<br/>
<center><table border="4">
<tr>
<th>Id</th>
<th>Nama</th>
<th>Alamat</th>
</tr></center>
@foreach($pasien as $p)
<center><tr>
<td>{{ $p->id }}</td>
<td>{{ $p->nama }}</td>
<td>{{ $p->alamat }}</td>
<td>
<a href="/pasien/edit/{{ $p->id }}">Edit</a>
|
<a href="/pasien/hapus/{{ $p->id }}">Hapus</a>
</td>
</tr></center>
@endforeach
</table>
</body>
</html>
