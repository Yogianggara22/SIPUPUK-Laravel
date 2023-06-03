<!DOCTYPE html>
<html>
<head>
	<title>Data Jenis Pupuk</title>
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
  <h2 >Data Jenis Pupuk</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
    <tr>
        <th scope="col">No</th>
        <th scope="col">ID Pupuk</th>
        <th scope="col">Kode Jenis Pupuk</th>
        <th scope="col">Nama Pupuk</th>
        <th scope="col">Berat</th>
      </tr>
  </thead>
		<tbody>
            @foreach ($tb_jenis_pupuk as $jenispupuk)
            <tr>
              <td>{{ $loop->iteration}}</td>
              <th scope="data">{{ $jenispupuk->ID_Pupuk }}</th>
              <td>{{ $jenispupuk->Kode_Jenis_Pupuk}}</td>
              <td>{{ $jenispupuk->Nama_Pupuk }}</td>
              <td>{{ $jenispupuk->Berat }}</td>
            </tr>
        @endforeach
		</tbody>
	</table>
 
</body>
</html>