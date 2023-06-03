<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_pegawai;
use PDF;


class datapegawai extends Controller
{
    public function datapegawai()
    {
        if (request('search')) {
            $tb_pegawai = tb_pegawai::where('ID_Pegawai', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Nama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Alamat', 'LIKE', '%' . request('search') . '%')
                ->orWhere('No_Telephone', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_pegawai = tb_pegawai::all();
        }
        return view('DATAPUPUK/pegawai/datapegawai', compact('tb_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('TAMBAHDATAPUPUK/tambahdatapegawai');
    }

    public function insert(Request $request)
    {
        tb_pegawai::create($request->all());
        return redirect()->route('datapegawai')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $ID_Pegawai)
    {
        $tb_pegawai = tb_pegawai::find($ID_Pegawai);
        $tb_pegawai->delete();
        return redirect()->route('datapegawai')->with('delete', 'Data Berhasil Dihapus !');
    }
    public function exportPDF()
    {
        $tb_pegawai = tb_pegawai::all();
        view()->share('datapegawai', $tb_pegawai);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatapegawai', compact('tb_pegawai'));
        return $pdf->stream('Laporan Data Pegawai.pdf');
    }

    public function edit(string $ID_Pegawai)
    {
        $tb_pegawai = tb_pegawai::find($ID_Pegawai);
        return view('EDITDATAPUPUK.editdatapegawai', compact('tb_pegawai'));
    }
    
    public function update(Request $request, string $ID_Pegawai)
    {
        $tb_pegawai = tb_pegawai::find($ID_Pegawai);
        $tb_pegawai->update($request->all());
        return redirect()->route('datapegawai')->with('edit', 'Data Berhasil Diubah !');
    }
}