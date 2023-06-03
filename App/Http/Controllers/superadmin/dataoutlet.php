<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_outlet_toko;
use PDF;


class dataoutlet extends Controller
{
    public function dataoutlet()
    {
        if (request('search')) {
            $tb_outlet_toko = tb_outlet_toko::where('No_Antrian', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Alamat_Penerima', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Jumlah_Pupuk_Dipesan', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_outlet_toko = tb_outlet_toko::all();
        }
        return view('DATAPUPUK/supir/dataoutlettoko', compact('tb_outlet_toko'));
    }

    public function create()
    {
        return view('TAMBAHDATAPUPUK/tambahdataoutlettoko');
    }

    public function insert(Request $request)
    {
        tb_outlet_toko::create($request->all());
        return redirect()->route('dataoutlet')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $No_Antrian)
    {
        $tb_outlet_toko = tb_outlet_toko::find($No_Antrian);
        $tb_outlet_toko->delete();
        return redirect()->route('dataoutlet')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_outlet_toko = tb_outlet_toko::all();
        view()->share('dataoutlet', $tb_outlet_toko);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdataoutlettoko', compact('tb_outlet_toko'));
        return $pdf->stream('Laporan Data Outlet Toko.pdf');
    }

    public function edit(string $No_Antrian)
    {
        $tb_outlet_toko = tb_outlet_toko::find($No_Antrian);
        return view('EDITDATAPUPUK.editdataoutlettoko', compact('tb_outlet_toko'));
    }

    public function update(Request $request, string $No_Antrian)
    {
        $tb_outlet_toko = tb_outlet_toko::find($No_Antrian);
        $tb_outlet_toko->update($request->all());
        return redirect()->route('dataoutlet')->with('edit', 'Data Berhasil Diubah !');
    }
}