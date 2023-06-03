<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_pupuk_masuk;
use PDF;

class datapupukmasuk extends Controller
{
    public function datapupukmasuk()
    {
        if (request('search')) {
            $tb_pupuk_masuk = tb_pupuk_masuk::where('Kode_Pupuk_Masuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Jenis_Pupuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Jumlah_Pupuk_Masuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Tanggal', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_pupuk_masuk = tb_pupuk_masuk::all();
        }
        return view('DATAPUPUK/pegawai/datapupukmasuk', compact('tb_pupuk_masuk'));
    }

    public function create()
    {
        return view('TAMBAHDATAPUPUK/tambahdatapupukmasuk');
    }

    public function insert(Request $request)
    {
        tb_pupuk_masuk::create($request->all());
        return redirect()->route('datapupukmasuk')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $Kode_Pupuk_Masuk)
    {
        $tb_pupuk_masuk = tb_pupuk_masuk::find($Kode_Pupuk_Masuk);
        $tb_pupuk_masuk->delete();
        return redirect()->route('datapupukmasuk')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_pupuk_masuk = tb_pupuk_masuk::all();
        view()->share('datapupukmasuk', $tb_pupuk_masuk);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatapupukmasuk', compact('tb_pupuk_masuk'));
        return $pdf->stream('Laporan Data Pupuk Masuk.pdf');
    }

    public function edit(string $Kode_Pupuk_Masuk)
    {
        $tb_pupuk_masuk = tb_pupuk_masuk::find($Kode_Pupuk_Masuk);
        return view('EDITDATAPUPUK.editdatapupukmasuk', compact('tb_pupuk_masuk'));
    }

    public function update(Request $request, string $Kode_Pupuk_Masuk)
    {
        $tb_pupuk_masuk = tb_pupuk_masuk::find($Kode_Pupuk_Masuk);
        $tb_pupuk_masuk->update($request->all());
        return redirect()->route('datapupukmasuk')->with('edit', 'Data Berhasil Diubah !');
    }

}