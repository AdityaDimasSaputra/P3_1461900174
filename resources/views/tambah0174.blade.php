<!DOCTYPE html>
<html>
<head>
<title>1461900174</title>
</head>
<body>
<center>
<h2>Tambah Pasien</h2>
<a href="/pasien"> Kembali</a>
<br/>
<br/>
<form action="/pasien/store" method="post">
{{ csrf_field() }}
Id <input type="text" name="id" required="required"> <br/><br/>
Nama <input type="text" name="nama" required="required"> <br/><br/>
Alamat <textarea name="alamat" required="required"></textarea><br/><br/>
<br/>
<input type="submit" value="Simpan Data">
</form>
</center>
</body>
</html>