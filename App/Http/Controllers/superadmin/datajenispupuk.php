<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_jenis_pupuk;
use App\Models\tb_pupuk;
use PDF;

class datajenispupuk extends Controller
{
    public function datajenispupuk()
    {
        if (request('search')) {
            $tb_jenispupuk = tb_jenis_pupuk::where('ID_Pupuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Kode_Jenis_Pupuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Nama_Pupuk', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Berat', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_jenispupuk = tb_jenis_pupuk::all();
        }
        return view('DATAPUPUK/pegawai/datajenispupuk', compact('tb_jenispupuk'));
    }

    public function create()
    {
        $tb_jenis_pupuk = tb_pupuk::get();
        return view('TAMBAHDATAPUPUK/tambahdatajenispupuk', compact('tb_jenis_pupuk'));
    }

    public function insert(Request $request)
    {
        tb_jenis_pupuk::create($request->all());
        return redirect()->route('datajenispupuk')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $ID_Pupuk)
    {
        $tb_jenis_pupuk = tb_jenis_pupuk::find($ID_Pupuk);
        $tb_jenis_pupuk->delete();
        return redirect()->route('datajenispupuk')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_jenis_pupuk = tb_jenis_pupuk::all();
        view()->share('datajenispupuk', $tb_jenis_pupuk);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatajenispupuk', compact('tb_jenis_pupuk'));
        return $pdf->stream('Laporan Data Jenis Pupuk.pdf');
    }

    public function edit(string $ID_Pupuk)
    {
        $tb_jenis_pupuk = tb_jenis_pupuk::find($ID_Pupuk);
        $tb_jenis_pupuk_relasi = tb_pupuk::get();
        return view('EDITDATAPUPUK.editdatajenispupuk', compact('tb_jenis_pupuk', 'tb_jenis_pupuk_relasi'));
    }

    public function update(Request $request, string $ID_Pupuk)
    {
        $tb_jenis_pupuk = tb_jenis_pupuk::find($ID_Pupuk);
        $tb_jenis_pupuk->update($request->all());
        return redirect()->route('datajenispupuk')->with('edit', 'Data Berhasil Diubah !');
    }
}