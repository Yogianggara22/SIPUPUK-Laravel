<!DOCTYPE html>
<html>
<head>
	<title>Data Gudang</title>
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
  <h2 >Data Gudang</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Gudang</th>
        <th scope="col">ID Karyawan</th>
        <th scope="col">Stock Semua Pupuk</th>
        <th scope="col">Jumlah Pupuk Masuk</th>
        <th scope="col">Jumlah Pupuk Keluar</th>
        <th scope="col">Kode Pupuk Keluar</th>
      </tr>
  </thead>
		<tbody>
            @foreach ($tb_gudang as $gudang)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <th scope="data">{{ $gudang->Kode_Gudang }}</th>
              <td>{{ $gudang->ID_Karyawan_Gudang}}</td>
              <td>{{ $gudang->Stock_Semua_Pupuk }}</td>
              <td>{{ $gudang->Jumlah_Pupuk_Masuk }}</td>
              <td>{{ $gudang->Jumlah_Pupuk_Keluar }}</td>
              <td>{{ $gudang->Kode_Pupuk_Keluar }}</td>
            </tr>
        @endforeach
		</tbody>
	</table>
 
</body>
</html>