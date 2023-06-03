@extends('superadmin/dashboard')

@section('menu')
<a href="/datajadwal" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Jadwal Pengiriman
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="/datajadwalpengirimanupdate/{{ $tb_jadwal_kirim->Kode_Jadwal }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="Kode_Jadwal" class="form-label">Kode Jadwal</label>
                    <input type="text" class="form-control" id="Kode_Jadwal" name="Kode_Jadwal"  value="{{ $tb_jadwal_kirim->Kode_Jadwal}}">
                </div>
                <div class="mb-2">
                    <label for="Kode_Pengiriman" class="form-label">Kode Pengiriman</label>
                    <select class="form-control" name="Kode_Pengiriman" aria-label="Default select example">
                        <option selected>Pilih Kode Pengiriman</option>
                        @foreach($tb_jadwal_kirim_relasipengiriman as $data )
                        <option value="{{ $data->Kode_Pengiriman }}" {{ $data->Kode_Pengiriman == $tb_jadwal_kirim->Kode_Pengiriman ? 'selected' : '' }}>{{ $data->Kode_Pengiriman }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="ID_Supir" class="form-label">ID Supir</label>
                    <select class="form-control" name="ID_Supir" aria-label="Default select example">
                        <option selected>Pilih ID Supir</option>
                        @foreach($tb_jadwal_kirim_relasisupir as $data )
                        <option value="{{ $data->ID_Supir }}" {{ $data->ID_Supir == $tb_jadwal_kirim->ID_Supir ? 'selected' : '' }}>{{ $data->ID_Supir }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="Tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control"  name="Tanggal"  value="{{ $tb_jadwal_kirim->Tanggal}}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection