<!DOCTYPE html>
<html>
<head>
	<title>Data Supir</title>
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
  <h2 >Data Supir</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
    <tr>
        <th scope="col">No</th>
        <th scope="col">ID Supir</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telephone</th>
      </tr>
  </thead>
		<tbody>
            @foreach ($tb_supir_pengirim as $supir)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <th scope="data">{{ $supir->ID_Supir }}</th>
              <td>{{ $supir->Nama}}</td>
              <td>{{ $supir->Alamat }}</td>
              <td>{{ $supir->No_Telephone }}</td>
            </tr>
        @endforeach
		</tbody>
	</table>
 
</body>
</html>