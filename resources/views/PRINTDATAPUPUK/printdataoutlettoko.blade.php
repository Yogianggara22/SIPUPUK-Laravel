<!DOCTYPE html>
<html>
<head>
	<title>Data Outlet Toko</title>
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
  <h2 >Data Outlet Toko</h2>
  <dl></dl>
</center>

<table class="table table-bordered" >
  <thead class="table-success">
    <tr>
        <th scope="col">No</th>
        <th scope="col">No Antrian</th>
        <th scope="col">Alamat Penerima</th>
        <th scope="col">Jumlah Pupuk Dipesan</th>
      </tr>
  </thead>
		<tbody>
            @foreach ($tb_outlet_toko as $outlet)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <th scope="data">{{ $outlet->No_Antrian }}</th>
                    <td>{{ $outlet->Alamat_Penerima}}</td>
                    <td>{{ $outlet->Jumlah_Pupuk_Dipesan }}</td>
               </tr>
            @endforeach
		</tbody>
	</table>
 
</body>
</html>