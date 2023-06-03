<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_jadwal_kirim;
use App\Models\tb_pengiriman;
use App\Models\tb_supir_pengirim;
use PDF;

class datajadwal extends Controller
{
    public function datajadwal()
    {
        if (request('search')) {
            $tb_jadwal_kirim = tb_jadwal_kirim::where('Kode_Jadwal', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Kode_Pengiriman', 'LIKE', '%' . request('search') . '%')
                ->orWhere('ID_Supir', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Tanggal', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_jadwal_kirim = tb_jadwal_kirim::all();
        }
        return view('DATAPUPUK/supir/datajadwalpengiriman', compact('tb_jadwal_kirim'));
    }

    public function create()
    {
        $tb_jadwal_kirim_pengiriman = tb_pengiriman::get();
        $tb_jadwal_kirim_supir = tb_supir_pengirim::get();
        return view('TAMBAHDATAPUPUK/tambahdatajadwalpengiriman', compact('tb_jadwal_kirim_pengiriman', 'tb_jadwal_kirim_supir'));
    }

    public function insert(Request $request)
    {
        tb_jadwal_kirim::create($request->all());
        return redirect()->route('datajadwal')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $Kode_Jadwal)
    {
        $tb_jadwal_kirim = tb_jadwal_kirim::find($Kode_Jadwal);
        $tb_jadwal_kirim->delete();
        return redirect()->route('datajadwal')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_jadwal_kirim = tb_jadwal_kirim::all();
        view()->share('datajadwal', $tb_jadwal_kirim);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatajadwalpengiriman', compact('tb_jadwal_kirim'));
        return $pdf->stream('Laporan Data Jadwal Pengiriman.pdf');
    }

    public function edit(string $Kode_Jadwal)
    {
        $tb_jadwal_kirim = tb_jadwal_kirim::find($Kode_Jadwal);
        $tb_jadwal_kirim_relasipengiriman = tb_pengiriman::get();
        $tb_jadwal_kirim_relasisupir = tb_supir_pengirim::get();
        return view('EDITDATAPUPUK.editdatajadwalpengiriman', compact('tb_jadwal_kirim', 'tb_jadwal_kirim_relasipengiriman', 'tb_jadwal_kirim_relasisupir'));
    }

    public function update(Request $request, string $Kode_Jadwal)
    {
        $tb_jadwal_kirim = tb_jadwal_kirim::find($Kode_Jadwal);
        $tb_jadwal_kirim->update($request->all());
        return redirect()->route('datajadwal')->with('edit', 'Data Berhasil Diubah !');
    }
}