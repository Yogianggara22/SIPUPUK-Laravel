<!DOCTYPE html>
<html>
<head>
	<title>Data Pupuk Keluar</title>
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
  <h2 >Data Pupuk Keluar</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Pupuk Keluar</th>
        <th scope="col">Jenis Pupuk</th>
        <th scope="col">Jumlah Pupuk Keluar</th>
        <th scope="col">Kode Pengiriman</th>
        <th scope="col">Tanggal</th>
      </tr>
  </thead>
		<tbody>
            @foreach ($tb_pupuk_keluar as $pupukkeluar)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <th scope="data">{{ $pupukkeluar->Kode_Pupuk_Keluar }}</th>
              <td>{{ $pupukkeluar->Jenis_Pupuk}}</td>
              <td>{{ $pupukkeluar->Jumlah_Pupuk_Keluar }}</td>
              <td>{{ $pupukkeluar->Kode_Pengiriman }}</td>
              <td>{{ $pupukkeluar->Tanggal }}</td>
            </tr>
        @endforeach
		</tbody>
	</table>
 
</body>
</html>