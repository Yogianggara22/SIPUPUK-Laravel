@extends('superadmin/dashboard')

@section('menu')
<a href="/datatruk" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Kendaraan Truk
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="{{ route('datatruktambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="Kode_Truk" class="form-label">Kode Truk</label>
                    <input type="text" class="form-control" id="Kode_Truk" name="Kode_Truk">
                </div>
                <div class="mb-2">
                    <label for="Jumlah_Truk_Tersedia" class="form-label">Jumlah Truk Tersedia</label>
                    <input type="text" class="form-control" id="Jumlah_Truk_Tersedia" name="Jumlah_Truk_Tersedia">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection