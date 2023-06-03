<!DOCTYPE html>
<html>
<head>
	<title>Data Barang Pupuk</title>
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
  <h2 >Data Barang Pupuk</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Jenis Pupuk</th>
        <th scope="col">Jenis Pupuk</th>
        <th scope="col">ID Pegawai</th>
        <th scope="col">Kode Pupuk Masuk</th>
        <th scope="col">Kode Gudang</th>
      </tr>
  </thead>
		<tbody>
            @foreach ($tb_pupuk as $pupuk)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <th scope="data">{{ $pupuk->Kode_Jenis_Pupuk }}</th>
              <td>{{ $pupuk->Jenis_Pupuk}}</td>
              <td>{{ $pupuk->ID_Pegawai }}</td>
              <td>{{ $pupuk->Kode_Pupuk_Masuk }}</td>
              <td>{{ $pupuk->Kode_Gudang }}</td>
            </tr>
        @endforeach
		</tbody>
	</table>
 
</body>
</html>