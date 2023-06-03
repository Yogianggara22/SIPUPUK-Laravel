<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\tb_pengiriman;
use Illuminate\Http\Request;
use App\Models\tb_pupuk_keluar;
use PDF;

class datapupukkeluar extends Controller
{
    public function datapupukkeluar()
    {
        if (request('search')) {
            $tb_pupuk_keluar = tb_pupuk_keluar::where('Kode_Pupuk_Keluar', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Jenis_Pupuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Jumlah_Pupuk_Keluar', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Kode_Pengiriman', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Tanggal', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_pupuk_keluar = tb_pupuk_keluar::all();
        }
        return view('DATAPUPUK/pegawai/datapupukkeluar', compact('tb_pupuk_keluar'));
    }

    public function create()
    {
        $tb_pupuk_keluar = tb_pengiriman::get();
        return view('TAMBAHDATAPUPUK/tambahdatapupukkeluar', compact('tb_pupuk_keluar'));
    }

    public function insert(Request $request)
    {
        tb_pupuk_keluar::create($request->all());
        return redirect()->route('datapupukkeluar')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $Kode_Pupuk_Keluar)
    {
        $tb_pupuk_keluar = tb_pupuk_keluar::find($Kode_Pupuk_Keluar);
        $tb_pupuk_keluar->delete();
        return redirect()->route('datapupukkeluar')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_pupuk_keluar = tb_pupuk_keluar::all();
        view()->share('datapupukkeluar', $tb_pupuk_keluar);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatapupukkeluar', compact('tb_pupuk_keluar'));
        return $pdf->stream('Laporan Data Pupuk Keluar.pdf');
    }

    public function edit(string $Kode_Pupuk_Keluar)
    {
        $tb_pupuk_keluar = tb_pupuk_keluar::find($Kode_Pupuk_Keluar);
        $tb_pupuk_keluar_relasi = tb_pengiriman::get();
        return view('EDITDATAPUPUK.editdatapupukkeluar', compact('tb_pupuk_keluar', 'tb_pupuk_keluar_relasi'));
    }

    public function update(Request $request, string $Kode_Pupuk_Keluar)
    {
        $tb_pupuk_keluar = tb_pupuk_keluar::find($Kode_Pupuk_Keluar);
        $tb_pupuk_keluar->update($request->all());
        return redirect()->route('datapupukkeluar')->with('edit', 'Data Berhasil Diubah !');
    }
}