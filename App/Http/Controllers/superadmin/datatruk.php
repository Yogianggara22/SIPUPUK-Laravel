<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_kendaraan_truk;
use PDF;

class datatruk extends Controller
{
    public function datatruk()
    {
        if (request('search')) {
            $tb_kendaraan_truk = tb_kendaraan_truk::where('Kode_Truk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Jumlah_Truk_Tersedia', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_kendaraan_truk = tb_kendaraan_truk::all();
        }
        return view('DATAPUPUK/supir/datatruk', compact('tb_kendaraan_truk'));
    }

    public function create()
    {
        return view('TAMBAHDATAPUPUK/tambahdatatruk');
    }

    public function insert(Request $request)
    {
        tb_kendaraan_truk::create($request->all());
        return redirect()->route('datatruk')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $Kode_Truk)
    {
        $tb_kendaraan_truk = tb_kendaraan_truk::find($Kode_Truk);
        $tb_kendaraan_truk->delete();
        return redirect()->route('datatruk')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_kendaraan_truk = tb_kendaraan_truk::all();
        view()->share('datatruk', $tb_kendaraan_truk);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatatruk', compact('tb_kendaraan_truk'));
        return $pdf->stream('Laporan Data Kendaraan Truk.pdf');
    }

    public function edit(string $Kode_Truk)
    {
        $tb_kendaraan_truk = tb_kendaraan_truk::find($Kode_Truk);
        return view('EDITDATAPUPUK.editdatatruk', compact('tb_kendaraan_truk'));
    }

    public function update(Request $request, string $Kode_Truk)
    {
        $tb_kendaraan_truk = tb_kendaraan_truk::find($Kode_Truk);
        $tb_kendaraan_truk->update($request->all());
        return redirect()->route('datatruk')->with('edit', 'Data Berhasil Diubah !');
    }
}