@extends('superadmin/dashboard')

@section('menu')
<a href="/data_karyawangudang" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Karyawan Gudang
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="/datakaryawangudangupdate/{{ $tb_karyawan_gudang->ID_Karyawan_Gudang }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="ID_Karyawan_Gudang" class="form-label">ID Karyawan Gudang</label>
                    <input type="text" class="form-control" id="ID_Karyawan_Gudang" name="ID_Karyawan_Gudang"  value="{{ $tb_karyawan_gudang->ID_Karyawan_Gudang}}">
                </div>
                <div class="mb-2">
                    <label for="Nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="Nama" name="Nama"  value="{{ $tb_karyawan_gudang->Nama}}">
                </div>
                <div class="mb-2">
                    <label for="Alamat" class="form-label">Alamat Lengkap</label>
                    <input type="text" class="form-control" name="Alamat"  value="{{ $tb_karyawan_gudang->Alamat}}">
                </div>
                <div class="mb-2">
                    <label for="No_Telephone" class="form-label">No Telephone</label>
                    <input type="text" class="form-control" name="No_Telephone"  value="{{ $tb_karyawan_gudang->No_Telephone}}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection