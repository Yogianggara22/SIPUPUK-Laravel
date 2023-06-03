<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\tb_gudang;
use App\Models\tb_pegawai;
use Illuminate\Http\Request;
use App\Models\tb_pupuk;
use App\Models\tb_pupuk_masuk;
use PDF;

class datapupuk extends Controller
{
    public function datapupuk()
    {
        if (request('search')) {
            $tb_pupuk = tb_pupuk::where('Kode_Jenis_Pupuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Jenis_Pupuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('ID_Pegawai', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Kode_Pupuk_Masuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Kode_Gudang', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_pupuk = tb_pupuk::all();
        }
        return view('DATAPUPUK/karyawangudang/databarangpupuk', compact('tb_pupuk'));
    }

    public function create()
    {
        $tb_pupuk_pegawai = tb_pegawai::get();
        $tb_pupuk_pupukmasuk = tb_pupuk_masuk::get();
        $tb_pupuk_gudang = tb_gudang::get();
        return view('TAMBAHDATAPUPUK/tambahdatabarangpupuk', compact('tb_pupuk_pegawai', 'tb_pupuk_pupukmasuk', 'tb_pupuk_gudang'));
    }

    public function insert(Request $request)
    {
        tb_pupuk::create($request->all());
        return redirect()->route('datapupuk')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $Kode_Jenis_Pupuk)
    {
        $tb_pupuk = tb_pupuk::find($Kode_Jenis_Pupuk);
        $tb_pupuk->delete();
        return redirect()->route('datapupuk')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_pupuk = tb_pupuk::all();
        view()->share('datapupuk', $tb_pupuk);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatabarangpupuk', compact('tb_pupuk'));
        return $pdf->stream('Laporan Data Barang Pupuk.pdf');
    }

    public function edit(string $Kode_Jenis_Pupuk)
    {
        $tb_pupuk = tb_pupuk::find($Kode_Jenis_Pupuk);
        $tb_pupuk_relasipegawai = tb_pegawai::get();
        $tb_pupuk_relasipupukmasuk = tb_pupuk_masuk::get();
        $tb_pupuk_relasigudang = tb_gudang::get();
        return view('EDITDATAPUPUK.editdatabarangpupuk', compact('tb_pupuk', 'tb_pupuk_relasipegawai', 'tb_pupuk_relasipupukmasuk', 'tb_pupuk_relasigudang'));
    }

    public function update(Request $request, string $Kode_Jenis_Pupuk)
    {
        $tb_pupuk = tb_pupuk::find($Kode_Jenis_Pupuk);
        $tb_pupuk->update($request->all());
        return redirect()->route('datapupuk')->with('edit', 'Data Berhasil Diubah !');
    }
}