@extends('superadmin/dashboard')

@section('menu')
<a href="/pupuk_masuk" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Pupuk Masuk
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="{{ route('datapupukmasuktambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="Kode_Pupuk_Masuk" class="form-label">Kode Pupuk Masuk</label>
                    <input type="text" class="form-control" id="Kode_Pupuk_Masuk" name="Kode_Pupuk_Masuk">
                </div>
                <div class="mb-2">
                    <label for="Jenis_Pupuk" class="form-label">Jenis Pupuk</label>
                    <input type="text" class="form-control" id="Jenis_Pupuk" name="Jenis_Pupuk">
                </div>
                <div class="mb-2">
                    <label for="Jumlah_Pupuk_Masuk" class="form-label">Jumlah Pupuk Masuk</label>
                    <input type="text" class="form-control" name="Jumlah_Pupuk_Masuk">
                </div>
                <div class="mb-2">
                    <label for="Tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="Tanggal">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection