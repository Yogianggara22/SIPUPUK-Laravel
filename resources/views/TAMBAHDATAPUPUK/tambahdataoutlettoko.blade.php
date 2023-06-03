@extends('superadmin/dashboard')

@section('menu')
<a href="/dataoutlet" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Outlet Toko
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="/dataoutlettambah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="No_Antrian" class="form-label">No Antrian</label>
                    <input type="text" class="form-control" id="No_Antrian" name="No_Antrian">
                </div>
                <div class="mb-2">
                    <label for="Alamat_Penerima" class="form-label">Alamat Penerima</label>
                    <input type="text" class="form-control" name="Alamat_Penerima">
                </div>
                <div class="mb-2">
                    <label for="Jumlah_Pupuk_Dipesan" class="form-label">Jumlah Pupuk Dipesan</label>
                    <input type="text" class="form-control" name="Jumlah_Pupuk_Dipesan">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection