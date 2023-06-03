<!DOCTYPE html>
<html>
<head>
	<title>Data Kendaraan Truk</title>
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
  <h2 >Data Kendaraan Truk</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Truk</th>
        <th scope="col">Jumlah Truk Tersedia</th>
      </tr>
  </thead>
		<tbody>
            @foreach ($tb_kendaraan_truk as $truk)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <th scope="data">{{ $truk->Kode_Truk }}</th>
              <td>{{ $truk->Jumlah_Truk_Tersedia}}</td>
            </tr>
        @endforeach
		</tbody>
	</table>
 
</body>
</html>