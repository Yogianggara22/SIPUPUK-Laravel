<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\tb_kendaraan_truk;
use App\Models\tb_outlet_toko;
use Illuminate\Http\Request;
use App\Models\tb_pengiriman;
use App\Models\tb_supir_pengirim;
use PDF;

class datapengiriman extends Controller
{
    public function datapengiriman()
    {
        if (request('search')) {
            $tb_pengiriman = tb_pengiriman::where('Kode_Pengiriman', 'LIKE', '%' . request('search') . '%')
                ->orWhere('ID_Supir', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Kode_Truk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('No_Antrian', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Tanggal_Pengiriman', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_pengiriman = tb_pengiriman::all();
        }
        return view('DATAPUPUK/supir/datapengiriman', compact('tb_pengiriman'));
    }

    public function create()
    {
        $tb_pengiriman_supir = tb_supir_pengirim::get();
        $tb_pengiriman_truk = tb_kendaraan_truk::get();
        $tb_pengiriman_outlet = tb_outlet_toko::get();
        return view('TAMBAHDATAPUPUK/tambahdatapengiriman', compact('tb_pengiriman_supir', 'tb_pengiriman_truk', 'tb_pengiriman_outlet'));
    }

    public function insert(Request $request)
    {
        tb_pengiriman::create($request->all());
        return redirect()->route('datapengiriman')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $Kode_Pengiriman)
    {
        $tb_pengiriman = tb_pengiriman::find($Kode_Pengiriman);
        $tb_pengiriman->delete();
        return redirect()->route('datapengiriman')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_pengiriman = tb_pengiriman::all();
        view()->share('datapengiriman', $tb_pengiriman);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatapengiriman', compact('tb_pengiriman'));
        return $pdf->stream('Laporan Data Pengiriman.pdf');
    }

    public function edit(string $Kode_Pengiriman)
    {
        $tb_pengiriman = tb_pengiriman::find($Kode_Pengiriman);
        $tb_pengiriman_relasisupir = tb_supir_pengirim::get();
        $tb_pengiriman_relasitruk = tb_kendaraan_truk::get();
        $tb_pengiriman_relasioutlet = tb_outlet_toko::get();
        return view('EDITDATAPUPUK.editdatapengiriman', compact('tb_pengiriman', 'tb_pengiriman_relasisupir', 'tb_pengiriman_relasitruk', 'tb_pengiriman_relasioutlet'));
    }

    public function update(Request $request, string $Kode_Pengiriman)
    {
        $tb_pengiriman = tb_pengiriman::find($Kode_Pengiriman);
        $tb_pengiriman->update($request->all());
        return redirect()->route('datapengiriman')->with('edit', 'Data Berhasil Diubah !');
    }
}