@extends('superadmin/dashboard')

@section('menu')
<a href="/pupuk_keluar" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Pupuk Keluar
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="{{ route('datapupukkeluartambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="Kode_Pupuk_Keluar" class="form-label">Kode Pupuk Keluar</label>
                    <input type="text" class="form-control" id="Kode_Pupuk_Keluar" name="Kode_Pupuk_Keluar">
                </div>
                <div class="mb-2">
                    <label for="Jenis_Pupuk" class="form-label">Jenis Pupuk</label>
                    <input type="text" class="form-control" id="Jenis_Pupuk" name="Jenis_Pupuk">
                </div>
                <div class="mb-2">
                    <label for="Jumlah_Pupuk_Keluar" class="form-label">Jumlah Pupuk Keluar</label>
                    <input type="text" class="form-control" name="Jumlah_Pupuk_Keluar">
                </div>
                <div class="mb-2">
                    <label for="Kode_Pengiriman" class="form-label">Kode Pengiriman</label>
                    <select class="form-control" name="Kode_Pengiriman" aria-label="Default select example">
                        <option selected>Pilih Kode Pengiriman</option>
                        @foreach($tb_pupuk_keluar as $data )
                        <option value="{{ $data->Kode_Pengiriman }}">{{ $data->Kode_Pengiriman}}</option>
                        @endforeach
                      </select>
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