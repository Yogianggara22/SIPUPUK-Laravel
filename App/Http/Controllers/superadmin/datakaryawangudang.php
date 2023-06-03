<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_karyawan_gudang;
use PDF;

class datakaryawangudang extends Controller
{
    public function datakaryawangudang()
    {
        if (request('search')) {
            $tb_karyawan = tb_karyawan_gudang::where('ID_Karyawan_Gudang', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Nama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Alamat', 'LIKE', '%' . request('search') . '%')
                ->orWhere('No_Telephone', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_karyawan = tb_karyawan_gudang::all();
        }
        return view('DATAPUPUK/karyawangudang/datakaryawangudang', compact('tb_karyawan'));
    }

    public function create()
    {
        return view('TAMBAHDATAPUPUK/tambahdatakaryawangudang');
    }

    public function insert(Request $request)
    {
        tb_karyawan_gudang::create($request->all());
        return redirect()->route('datakaryawangudang')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $ID_Karyawan_Gudang)
    {
        $tb_karyawan_gudang = tb_karyawan_gudang::find($ID_Karyawan_Gudang);
        $tb_karyawan_gudang->delete();
        return redirect()->route('datakaryawangudang')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_karyawan_gudang = tb_karyawan_gudang::all();
        view()->share('datakaryawangudang', $tb_karyawan_gudang);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatakaryawangudang', compact('tb_karyawan_gudang'));
        return $pdf->stream('Laporan Data Karyawan Gudang.pdf');
    }

    public function edit(string $ID_Karyawan_Gudang)
    {
        $tb_karyawan_gudang = tb_karyawan_gudang::find($ID_Karyawan_Gudang);
        return view('EDITDATAPUPUK.editdatakaryawangudang', compact('tb_karyawan_gudang'));
    }

    public function update(Request $request, string $ID_Karyawan_Gudang)
    {
        $tb_karyawan_gudang = tb_karyawan_gudang::find($ID_Karyawan_Gudang);
        $tb_karyawan_gudang->update($request->all());
        return redirect()->route('datakaryawangudang')->with('edit', 'Data Berhasil Diubah !');
    }
}