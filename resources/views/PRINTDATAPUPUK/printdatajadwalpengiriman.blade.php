<!DOCTYPE html>
<html>
<head>
	<title>Data Jadwal Pengiriman</title>
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
  <h2 >Data Jadwal Pengiriman</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Jadwal</th>
      <th scope="col">Kode Pengiriman</th>
      <th scope="col">ID Supir</th>
      <th scope="col">Tanggal</th>
    </tr>
  </thead>
		<tbody>
            @foreach ($tb_jadwal_kirim as $jadwal)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <th scope="data">{{ $jadwal->Kode_Jadwal }}</th>
                    <td>{{ $jadwal->Kode_Pengiriman}}</td>
                    <td>{{ $jadwal->ID_Supir }}</td>
                    <td>{{ $jadwal->Tanggal }}</td>
                </tr>
             @endforeach
		</tbody>
	</table>
 
</body>
</html>