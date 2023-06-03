@extends('superadmin/dashboard')

@section('menu')
<a href="/data_stock" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Stock Pupuk
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="/datastockpupukupdate/{{ $tb_stock_pupuk->Kode_Stock }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="Kode_Stock" class="form-label">Kode Stock</label>
                    <input type="text" class="form-control" id="Kode_Stock" name="Kode_Stock"  value="{{ $tb_stock_pupuk->Kode_Stock}}">
                </div>
                <div class="mb-2">
                    <label for="Kode_Jenis_Pupuk" class="form-label">Kode Jenis Pupuk</label>
                    <select class="form-control" name="Kode_Jenis_Pupuk" aria-label="Default select example">
                        <option selected>Pilih Kode Jenis Pupuk</option>
                        @foreach($tb_stock_pupuk_relasi as $data )
                        <option value="{{ $data->Kode_Jenis_Pupuk }}" {{ $data->Kode_Jenis_Pupuk == $tb_stock_pupuk->Kode_Jenis_Pupuk ? 'selected' : '' }}>{{ $data->Kode_Jenis_Pupuk }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="Jumlah_Stock" class="form-label">Jumlah Stock</label>
                    <input type="text" class="form-control" name="Jumlah_Stock"  value="{{ $tb_stock_pupuk->Jumlah_Stock}}">
                </div>
                <div class="mb-2">
                    <label for="Nama_Pupuk" class="form-label">Nama Pupuk</label>
                    <input type="text" class="form-control" name="Nama_Pupuk"  value="{{ $tb_stock_pupuk->Nama_Pupuk}}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection