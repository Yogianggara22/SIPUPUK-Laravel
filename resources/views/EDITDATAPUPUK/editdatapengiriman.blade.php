@extends('superadmin/dashboard')

@section('menu')
<a href="/datapengiriman" class="nav-link">Back</a>
@endsection

@section('judul')
    Input Data Pengiriman
@endsection

@section('content')
<div class="row ml-2">
    <div class="card">
        <div class="card-body" style="width: 1170px">
            <form action="/datapengirimanupdate/{{ $tb_pengiriman->Kode_Pengiriman }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="Kode_Pengiriman" class="form-label">Kode Pengiriman</label>
                    <input type="text" class="form-control" id="Kode_Pengiriman" name="Kode_Pengiriman"  value="{{ $tb_pengiriman->Kode_Pengiriman}}">
                </div>
                <div class="mb-2">
                    <label for="ID_Supir" class="form-label">ID Supir</label>
                    <select class="form-control" name="ID_Supir" aria-label="Default select example">
                        <option selected>Pilih ID Supir</option>
                        @foreach($tb_pengiriman_relasisupir as $data )
                        <option value="{{ $data->ID_Supir }}" {{ $data->ID_Supir == $tb_pengiriman->ID_Supir ? 'selected' : '' }}>{{ $data->ID_Supir }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="Kode_Truk" class="form-label">Kode Truk</label>
                    <select class="form-control" name="Kode_Truk" aria-label="Default select example">
                        <option selected>Pilih Kode Truk</option>
                        @foreach($tb_pengiriman_relasitruk as $data )
                        <option value="{{ $data->Kode_Truk }}" {{ $data->Kode_Truk == $tb_pengiriman->Kode_Truk ? 'selected' : '' }}>{{ $data->Kode_Truk }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="No_Antrian" class="form-label">No Antrian</label>
                    <select class="form-control" name="No_Antrian" aria-label="Default select example">
                        <option selected>Pilih No Antrian</option>
                        @foreach($tb_pengiriman_relasioutlet as $data )
                        <option value="{{ $data->No_Antrian }}" {{ $data->No_Antrian == $tb_pengiriman->No_Antrian ? 'selected' : '' }}>{{ $data->No_Antrian }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-2">
                    <label for="Tanggal_Pengiriman" class="form-label">Tanggal Pengiriman</label>
                    <input type="date" class="form-control" id="Tanggal_Pengiriman" name="Tanggal_Pengiriman"  value="{{ $tb_pengiriman->Tanggal_Pengiriman}}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection