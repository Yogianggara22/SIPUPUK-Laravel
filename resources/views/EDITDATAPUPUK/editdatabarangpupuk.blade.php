@extends('superadmin/dashboard')

@section('menu')
<a href="/data_pupuk" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Barang Pupuk
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="/databarangpupukupdate/{{ $tb_pupuk->Kode_Jenis_Pupuk }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="Kode_Jenis_Pupuk" class="form-label">Kode Jenis Pupuk</label>
                    <input type="text" class="form-control" id="Kode_Jenis_Pupuk" name="Kode_Jenis_Pupuk"  value="{{ $tb_pupuk->Kode_Jenis_Pupuk}}">
                </div>
                <div class="mb-2">
                    <label for="Jenis_Pupuk" class="form-label">Jenis Pupuk</label>
                    <input type="text" class="form-control" name="Jenis_Pupuk"  value="{{ $tb_pupuk->Jenis_Pupuk}}">
                </div>
                <div class="mb-2">
                    <label for="ID_Pegawai" class="form-label">ID Pegawai</label>
                    <select class="form-control" name="ID_Pegawai" aria-label="Default select example">
                        <option selected>Pilih ID Pegawai</option>
                        @foreach($tb_pupuk_relasipegawai as $data )
                        <option value="{{ $data->ID_Pegawai }}" {{ $data->ID_Pegawai == $tb_pupuk->ID_Pegawai ? 'selected' : '' }}>{{ $data->ID_Pegawai }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="Kode_Pupuk_Masuk" class="form-label">Kode Pupuk Masuk</label>
                    <select class="form-control" name="Kode_Pupuk_Masuk" aria-label="Default select example">
                        <option selected>Pilih Kode Pupuk Masuk</option>
                        @foreach($tb_pupuk_relasipupukmasuk as $data )
                        <option value="{{ $data->Kode_Pupuk_Masuk }}" {{ $data->Kode_Pupuk_Masuk == $tb_pupuk->Kode_Pupuk_Masuk ? 'selected' : '' }}>{{ $data->Kode_Pupuk_Masuk }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="Kode_Gudang" class="form-label">Kode Gudang</label>
                    <select class="form-control" name="Kode_Gudang" aria-label="Default select example">
                        <option selected>Pilih Kode Gudang</option>
                        @foreach($tb_pupuk_relasigudang as $data )
                        <option value="{{ $data->Kode_Gudang }}" {{ $data->Kode_Gudang == $tb_pupuk->Kode_Gudang ? 'selected' : '' }}>{{ $data->Kode_Gudang }}</option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection