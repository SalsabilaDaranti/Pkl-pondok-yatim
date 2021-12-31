<html>
<head>
	<title>Data Donasi</title>
</head>
<body>
 
	<h3>Data Donasi</h3>
 
	<a href="/donasi/tambah"> + Tambah Donasi</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id</th>
			<th>Konfirmasi_id</th>
			<th>Nama donatur</th>
			<th>Jumlah</th>
			<th>Tanggal</th>
			<th>opsi</th>
		</tr>
		@foreach($donasi as $d)
		<tr>
            <td>{{ $d->id }}</td>
			<td>{{ $d->nama_donatur }}</td>
			<td>{{ $d->jumlah }}</td>
			<td>{{ $d->tanggal }}</td>
           
            <td>
				<a href="/donasi/edit/{{ $d->id }}">Edit</a>
				|
				<a href="/donasi/hapus/{{ $d->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>


@foreach($pegawai as $p)
<tr>
	<td>{{ $p->pegawai_nama }}</td>
	<td>{{ $p->pegawai_jabatan }}</td>
	<td>{{ $p->pegawai_umur }}</td>
	<td>{{ $p->pegawai_alamat }}</td>
	<td>
		<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
		|
		<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
	</td>
</tr>
@endforeach
