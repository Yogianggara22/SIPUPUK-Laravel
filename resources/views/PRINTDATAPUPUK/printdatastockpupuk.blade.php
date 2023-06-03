<!DOCTYPE html>
<html>
<head>
	<title>Data Stock Pupuk</title>
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
  <h2 >Data Stock Pupuk</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
    <tr>
        <th scope="col">No</th>
        <th scope="col">Kode Stock</th>
        <th scope="col">Kode Jenis Pupuk</th>
        <th scope="col">Jumlah Stock</th>
        <th scope="col">Nama Pupuk</th>
      </tr>
  </thead>
		<tbody>
            @foreach ($tb_stock_pupuk as $stock)
            <tr>
              <td>{{ $loop->iteration}}</td> 
              <th scope="data">{{ $stock->Kode_Stock }}</th>
              <td>{{ $stock->Kode_Jenis_Pupuk}}</td>
              <td>{{ $stock->Jumlah_Stock }}</td>
              <td>{{ $stock->Nama_Pupuk }}</td>
            </tr>
        @endforeach
		</tbody>
	</table>
 
</body>
</html>