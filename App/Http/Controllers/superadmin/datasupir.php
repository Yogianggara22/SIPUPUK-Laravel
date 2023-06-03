<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tb_supir_pengirim;
use PDF;

class datasupir extends Controller
{
    public function datasupir()
    {
        if (request('search')) {
            $tb_supir_pengirim = tb_supir_pengirim::where('ID_Supir', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Nama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('Alamat', 'LIKE', '%' . request('search') . '%')
                ->orWhere('No_Telephone', 'LIKE', '%' . request('search') . '%')
                ->paginate(10);
        } else {
            $tb_supir_pengirim = tb_supir_pengirim::all();
        }
        return view('DATAPUPUK/supir/datasupir', compact('tb_supir_pengirim'));
    }

    public function create()
    {
        return view('TAMBAHDATAPUPUK/tambahdatasupir');
    }

    public function insert(Request $request)
    {
        tb_supir_pengirim::create($request->all());
        return redirect()->route('datasupir')->with('input', 'Data Berhasil Ditambahkan !');
    }

    public function delete(string $ID_Supir)
    {
        $tb_supir_pengirim = tb_supir_pengirim::find($ID_Supir);
        $tb_supir_pengirim->delete();
        return redirect()->route('datasupir')->with('delete', 'Data Berhasil Dihapus !');
    }

    public function exportPDF()
    {
        $tb_supir_pengirim = tb_supir_pengirim::all();
        view()->share('datasupir', $tb_supir_pengirim);
        $pdf = PDF::loadview('PRINTDATAPUPUK.printdatasupir', compact('tb_supir_pengirim'));
        return $pdf->stream('Laporan Data Supir Pengirim.pdf');
    }

    public function edit(string $ID_Supir)
    {
        $tb_supir_pengirim = tb_supir_pengirim::find($ID_Supir);
        return view('EDITDATAPUPUK.editdatasupir', compact('tb_supir_pengirim'));
    }

    public function update(Request $request, string $ID_Supir)
    {
        $tb_supir_pengirim = tb_supir_pengirim::find($ID_Supir);
        $tb_supir_pengirim->update($request->all());
        return redirect()->route('datasupir')->with('edit', 'Data Berhasil Diubah !');
    }
}