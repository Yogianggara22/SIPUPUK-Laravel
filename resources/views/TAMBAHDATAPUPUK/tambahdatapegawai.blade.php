@extends('superadmin/dashboard')

@section('menu')
<a href="/data_pegawai" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Pegawai
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="/datapegawaitambah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="ID_Pegawai" class="form-label">ID</label>
                    <input type="text" class="form-control" id="ID_Pegawai" name="ID_Pegawai">
                </div>
                <div class="mb-2">
                    <label for="Nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="Nama" name="Nama">
                </div>
                <div class="mb-2">
                    <label for="Alamat" class="form-label">Alamat Lengkap</label>
                    <input type="text" class="form-control" name="Alamat">
                </div>
                <div class="mb-2">
                    <label for="No_Telephone" class="form-label">No Telephone</label>
                    <input type="text" class="form-control" name="No_Telephone">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection