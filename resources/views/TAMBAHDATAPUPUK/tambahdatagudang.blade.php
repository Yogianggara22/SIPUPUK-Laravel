@extends('superadmin/dashboard')

@section('menu')
<a href="/data_gudang" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Gudang
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="/datagudangtambah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="Kode_Gudang" class="form-label">Kode Gudang</label>
                    <input type="text" class="form-control" id="Kode_Gudang" name="Kode_Gudang">
                </div>
                <div class="mb-2">
                    <label for="ID_Karyawan_Gudang" class="form-label">ID Karyawan Gudang</label>
                    <select class="form-control" name="ID_Karyawan_Gudang" aria-label="Default select example">
                        <option selected>Pilih ID Karyawan Gudang</option>
                        @foreach($tb_gudangkaryawan as $data )
                        <option value="{{ $data->ID_Karyawan_Gudang }}">{{ $data->ID_Karyawan_Gudang}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="Stock_Semua_Pupuk" class="form-label">Stock Semua Pupuk</label>
                    <input type="text" class="form-control" name="Stock_Semua_Pupuk">
                </div>
                <div class="mb-2">
                    <label for="Jumlah_Pupuk_Masuk" class="form-label">Jumlah Pupuk Masuk</label>
                    <input type="text" class="form-control" name="Jumlah_Pupuk_Masuk">
                </div>
                <div class="mb-2">
                    <label for="Jumlah_Pupuk_Keluar" class="form-label">Jumlah Pupuk Keluar</label>
                    <input type="text" class="form-control" name="Jumlah_Pupuk_Keluar">
                </div>  
                <div class="mb-2">
                    <label for="Kode_Pupuk_Keluar" class="form-label">Kode Pupuk Keluar</label>
                    <select class="form-control" name="Kode_Pupuk_Keluar" aria-label="Default select example">
                        <option selected>Pilih Kode Pupuk Keluar</option>
                        @foreach($tb_gudangpupukkeluar as $data )
                        <option value="{{ $data->Kode_Pupuk_Keluar }}">{{ $data->Kode_Pupuk_Keluar }}</option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection