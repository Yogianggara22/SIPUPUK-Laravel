<!DOCTYPE html>
<html>
<head>
	<title>Data Pegawai</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
<center>
  <h2 >Data Pegawai</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
      <tr>
        <th scope="col">No</th>
        <th scope="col">ID Pegawai</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telephone</th>
      </tr>
  </thead>
		<tbody>
          @foreach ($tb_pegawai as $pegawai)
          <tr>
            <td>{{ $loop->iteration}}</td>
            <th scope="data">{{ $pegawai->ID_Pegawai }}</th>
            <td>{{ $pegawai->Nama}}</td>
            <td>{{ $pegawai->Alamat }}</td>
            <td>{{ $pegawai->No_Telephone }}</td>
          </tr>
          @endforeach
		</tbody>
	</table>
 
</body>
</html>