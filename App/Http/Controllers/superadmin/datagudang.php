<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_gudang;
use App\Models\tb_karyawan_gudang;
use App\Models\tb_pupuk_keluar;
use PDF;

class datagudang extends Controller
{
    public function datagudang()
    {
        if (request('search')) {
            $tb_gudang = tb_gudang::where('Kode_Gudang', 'LIKE', '%' . request('search') . '%')
                ->orWhere('ID_Karyawan_Gudang', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Stock_Semua_Pupuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Jumlah_Pupuk_Masuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Jumlah_Pupuk_Keluar', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Kode_Pupuk_Keluar', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_gudang = tb_gudang::all();
        }
        return view('DATAPUPUK/karyawangudang/datagudang', compact('tb_gudang'));
    }
    public function create()
    {
        $tb_gudangkaryawan = tb_karyawan_gudang::get();
        $tb_gudangpupukkeluar = tb_pupuk_keluar::get();
        return view('TAMBAHDATAPUPUK/tambahdatagudang', compact('tb_gudangkaryawan', 'tb_gudangpupukkeluar'));
    }

    public function insert(Request $request)
    {
        tb_gudang::create($request->all());
        return redirect()->route('datagudang')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $Kode_Gudang)
    {
        $tb_gudang = tb_gudang::find($Kode_Gudang);
        $tb_gudang->delete();
        return redirect()->route('datagudang')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_gudang = tb_gudang::all();
        view()->share('datagudang', $tb_gudang);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatagudang', compact('tb_gudang'));
        return $pdf->stream('Laporan Data Gudang.pdf');
    }

    public function edit(string $Kode_Gudang)
    {
        $tb_gudang = tb_gudang::find($Kode_Gudang);
        $tb_gudang_relasikaryawan = tb_karyawan_gudang::get();
        $tb_gudang_relasipupukkeluar = tb_pupuk_keluar::get();
        return view('EDITDATAPUPUK.editdatagudang', compact('tb_gudang', 'tb_gudang_relasikaryawan', 'tb_gudang_relasipupukkeluar'));
    }

    public function update(Request $request, string $Kode_Gudang)
    {
        $tb_gudang = tb_gudang::find($Kode_Gudang);
        $tb_gudang->update($request->all());
        return redirect()->route('datagudang')->with('edit', 'Data Berhasil Diubah !');
    }
}