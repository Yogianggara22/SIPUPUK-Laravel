<!DOCTYPE html>
<html>
<head>
	<title>Data Pengiriman</title>
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
  <h2 >Data Pengiriman</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Pengiriman</th>
      <th scope="col">ID Supir</th>
      <th scope="col">Kode Truk</th>
      <th scope="col">No Antrian</th>
      <th scope="col">Tanggal Pengiriman</th>
    </tr>
  </thead>
		<tbody>
            @foreach ($tb_pengiriman as $pengiriman)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <th scope="data">{{ $pengiriman->Kode_Pengiriman }}</th>
                        <td>{{ $pengiriman->ID_Supir}}</td>
                        <td>{{ $pengiriman->Kode_Truk }}</td>
                        <td>{{ $pengiriman->No_Antrian }}</td>
                        <td>{{ $pengiriman->Tanggal_Pengiriman }}</td>
                  </tr>
             @endforeach
		</tbody>
	</table>
 
</body>
</html>