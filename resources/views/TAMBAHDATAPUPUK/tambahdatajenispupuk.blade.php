@extends('superadmin/dashboard')

@section('menu')
<a href="/jenis_pupuk" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Jenis Pupuk
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="/datajenispupuktambah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="ID_Pupuk" class="form-label">ID Pupuk</label>
                    <input type="text" class="form-control" id="ID_Pupuk" name="ID_Pupuk">
                </div>
                <div class="mb-2">
                    <label for="Kode_Jenis_Pupuk" class="form-label">Kode Jenis Pupuk</label>
                    <select class="form-control" name="Kode_Jenis_Pupuk" aria-label="Default select example">
                        <option selected>Pilih Jenis Pupuk</option>
                        @foreach($tb_jenis_pupuk as $data )
                        <option value="{{ $data->Kode_Jenis_Pupuk }}">{{ $data->Kode_Jenis_Pupuk }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="Nama_Pupuk" class="form-label">Nama Pupuk</label>
                    <input type="text" class="form-control" name="Nama_Pupuk">
                </div>
                <div class="mb-2">
                    <label for="Berat" class="form-label">Berat</label>
                    <input type="text" class="form-control" name="Berat">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection