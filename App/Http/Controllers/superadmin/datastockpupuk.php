<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\tb_pupuk;
use Illuminate\Http\Request;
use App\Models\tb_stock_pupuk;
use PDF;

class datastockpupuk extends Controller
{
    public function datastock()
    {
        if (request('search')) {
            $tb_stock = tb_stock_pupuk::where('Kode_Stock', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Kode_Jenis_Pupuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Jumlah_Stock', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Nama_Pupuk', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_stock = tb_stock_pupuk::all();
        }
        return view('DATAPUPUK/karyawangudang/datastockpupuk', compact('tb_stock'));
    }

    public function create()
    {
        $tb_stock_pupuk = tb_pupuk::get();
        return view('TAMBAHDATAPUPUK/tambahdatastockpupuk', compact('tb_stock_pupuk'));
    }

    public function insert(Request $request)
    {
        tb_stock_pupuk::create($request->all());
        return redirect()->route('datastock')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $Kode_Stock)
    {
        $tb_stock_pupuk = tb_stock_pupuk::find($Kode_Stock);
        $tb_stock_pupuk->delete();
        return redirect()->route('datastock')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_stock_pupuk = tb_stock_pupuk::all();
        view()->share('datastock', $tb_stock_pupuk);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatastockpupuk', compact('tb_stock_pupuk'));
        return $pdf->stream('Laporan Data Stock Pupuk.pdf');
    }

    public function edit(string $Kode_Stock)
    {
        $tb_stock_pupuk = tb_stock_pupuk::find($Kode_Stock);
        $tb_stock_pupuk_relasi = tb_pupuk::get();
        return view('EDITDATAPUPUK.editdatastockpupuk', compact('tb_stock_pupuk', 'tb_stock_pupuk_relasi'));
    }

    public function update(Request $request, string $Kode_Stock)
    {
        $tb_stock_pupuk = tb_stock_pupuk::find($Kode_Stock);
        $tb_stock_pupuk->update($request->all());
        return redirect()->route('datastock')->with('edit', 'Data Berhasil Diubah !');
    }
}