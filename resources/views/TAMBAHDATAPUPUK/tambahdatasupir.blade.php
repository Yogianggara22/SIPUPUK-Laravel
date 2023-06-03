@extends('superadmin/dashboard')

@section('menu')
<a href="/datasupir" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Supir
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="{{ route('datasupirtambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="ID_Supir" class="form-label">ID Supir</label>
                    <input type="text" class="form-control" id="ID_Supir" name="ID_Supir">
                </div>
                <div class="mb-2">
                    <label for="Nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="Nama" name="Nama">
                </div>
                <div class="mb-2">
                    <label for="Alamat" class="form-label">Alamat</label>
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