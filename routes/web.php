<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\MidlewareSuperadmin;
use App\Http\Middleware\MiddlewarePegawai;
use App\Http\Middleware\MidlewareKaryawanGudang;
use App\Http\Middleware\MidlewareSupir;
use App\Http\Controllers\karyawangudang\DashboardKaryawan;
use App\Http\Controllers\supir\DashboardSupir;
use App\Http\Controllers\pegawai\DashboardPegawai;
use App\Http\Controllers\superadmin\DashboardAdmin;
use App\Http\Controllers\superadmin\datagudang;
use App\Http\Controllers\superadmin\datajenispupuk;
use App\Http\Controllers\superadmin\datakaryawangudang;
use App\Http\Controllers\superadmin\datapupuk;
use App\Http\Controllers\superadmin\datastockpupuk;
use App\Http\Controllers\superadmin\datapegawai;
use App\Http\Controllers\superadmin\datapupukmasuk;
use App\Http\Controllers\superadmin\datapupukkeluar;
use App\Http\Controllers\superadmin\datasupir;
use App\Http\Controllers\superadmin\datatruk;
use App\Http\Controllers\superadmin\datapengiriman;
use App\Http\Controllers\superadmin\datajadwal;
use App\Http\Controllers\superadmin\dataoutlet;
use App\Http\Controllers\superadmin\datauser;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

// login dan logout
Route::get('/login', [AuthController::class, 'index']);
Route::post('/do_login', [AuthController::class, 'on_login']);
Route::get('/do_logout', [AuthController::class, 'on_logout']);

Route::middleware([MidlewareSuperadmin::class])->group(function () {
    // menampilkan halaman
    Route::get('/superadmin', [DashboardAdmin::class, 'index']);
    Route::get('/data_gudang', [datagudang::class, 'datagudang'])->name('data_gudang');
    Route::get('/data_karyawangudang', [datakaryawangudang::class, 'datakaryawangudang'])->name('data_karyawan_gudang');
    Route::get('/data_stock', [datastockpupuk::class, 'datastock'])->name('data_stock_pupuk');
    Route::get('/data_pupuk', [datapupuk::class, 'datapupuk'])->name('data_pupuk');
    Route::get('/data_pegawai', [datapegawai::class, 'datapegawai'])->name('data_pegawai');
    Route::get('/jenis_pupuk', [datajenispupuk::class, 'datajenispupuk'])->name('data_jenispupuk');
    Route::get('/pupuk_masuk', [datapupukmasuk::class, 'datapupukmasuk'])->name('data_pupuk_masuk');
    Route::get('/pupuk_keluar', [datapupukkeluar::class, 'datapupukkeluar'])->name('data_pupuk_keluar');
    Route::get('/datasupir', [datasupir::class, 'supir'])->name('data_supir_pengirim');
    Route::get('/datatruk', [datatruk::class, 'truk'])->name('data_kendaraan_truk');
    Route::get('/datapengiriman', [datapengiriman::class, 'datapengiriman'])->name('data_kendaraan_truk');
    Route::get('/datajadwal', [datajadwal::class, 'datajadwal'])->name('data_jadwal_pengiriman');
    Route::get('/dataoutlet', [dataoutlet::class, 'dataoutlet'])->name('data_outlet_toko');

    // Tambah data 
    Route::get('/datapegawai', [datapegawai::class, 'datapegawai'])->name('datapegawai');
    Route::post('/datapegawaitambah', [datapegawai::class, 'insert'])->name('datapegawaitambah');
    Route::get('/tambahdatapegawai', [datapegawai::class, 'create'])->name('tambahdatapegawai');

    Route::get('/datajenispupuk', [datajenispupuk::class, 'datajenispupuk'])->name('datajenispupuk');
    Route::post('/datajenispupuktambah', [datajenispupuk::class, 'insert'])->name('datajenispupuktambah');
    Route::get('/tambahdatajenispupuk', [datajenispupuk::class, 'create'])->name('tambahdatajenispupuk');

    Route::get('/datapupukmasuk', [datapupukmasuk::class, 'datapupukmasuk'])->name('datapupukmasuk');
    Route::post('/datapupukmasuktambah', [datapupukmasuk::class, 'insert'])->name('datapupukmasuktambah');
    Route::get('/tambahdatapupukmasuk', [datapupukmasuk::class, 'create'])->name('tambahdatapupukmasuk');

    Route::get('/datapupukkeluar', [datapupukkeluar::class, 'datapupukkeluar'])->name('datapupukkeluar');
    Route::post('/datapupukkeluartambah', [datapupukkeluar::class, 'insert'])->name('datapupukkeluartambah');
    Route::get('/tambahdatapupukkeluar', [datapupukkeluar::class, 'create'])->name('tambahdatapupukkeluar');

    Route::get('/datakaryawangudang', [datakaryawangudang::class, 'datakaryawangudang'])->name('datakaryawangudang');
    Route::post('/datakaryawangudangtambah', [datakaryawangudang::class, 'insert'])->name('datakaryawangudangtambah');
    Route::get('/tambahdatakaryawangudang', [datakaryawangudang::class, 'create'])->name('tambahdatakaryawangudang');

    Route::get('/datagudang', [datagudang::class, 'datagudang'])->name('datagudang');
    Route::post('/datagudangtambah', [datagudang::class, 'insert'])->name('datagudangtambah');
    Route::get('/tambahdatagudang', [datagudang::class, 'create'])->name('tambahdatagudang');

    Route::get('/datastock', [datastockpupuk::class, 'datastock'])->name('datastock');
    Route::post('/datastocktambah', [datastockpupuk::class, 'insert'])->name('datastocktambah');
    Route::get('/tambahdatastock', [datastockpupuk::class, 'create'])->name('tambahdatastock');

    Route::get('/datapupuk', [datapupuk::class, 'datapupuk'])->name('datapupuk');
    Route::post('/datapupuktambah', [datapupuk::class, 'insert'])->name('datapupuktambah');
    Route::get('/tambahdatapupuk', [datapupuk::class, 'create'])->name('tambahdatapupuk');

    Route::get('/datasupir', [datasupir::class, 'datasupir'])->name('datasupir');
    Route::post('/datasupirtambah', [datasupir::class, 'insert'])->name('datasupirtambah');
    Route::get('/tambahdatasupir', [datasupir::class, 'create'])->name('tambahdatasupir');

    Route::get('/datatruk', [datatruk::class, 'datatruk'])->name('datatruk');
    Route::post('/datatruktambah', [datatruk::class, 'insert'])->name('datatruktambah');
    Route::get('/tambahdatatruk', [datatruk::class, 'create'])->name('tambahdatatruk');

    Route::get('/datapengiriman', [datapengiriman::class, 'datapengiriman'])->name('datapengiriman');
    Route::post('/datapengirimantambah', [datapengiriman::class, 'insert'])->name('datapengirimantambah');
    Route::get('/tambahdatapengiriman', [datapengiriman::class, 'create'])->name('tambahdatapengiriman');

    Route::get('/datajadwal', [datajadwal::class, 'datajadwal'])->name('datajadwal');
    Route::post('/datajadwaltambah', [datajadwal::class, 'insert'])->name('datajadwaltambah');
    Route::get('/tambahdatajadwal', [datajadwal::class, 'create'])->name('tambahdatajadwal');

    Route::get('/dataoutlet', [dataoutlet::class, 'dataoutlet'])->name('dataoutlet');
    Route::post('/dataoutlettambah', [dataoutlet::class, 'insert'])->name('dataoutlettambah');
    Route::get('/tambahdataoutlet', [dataoutlet::class, 'create'])->name('tambahdataoutlet');

    //update data
    Route::get('/datapegawaiedit/{ID_Pegawai}', [datapegawai::class, 'edit'])->name('datapegawaiedit');
    Route::post('/datapegawaiupdate/{ID_Pegawai}', [datapegawai::class, 'update'])->name('datapegawaiupdate');

    Route::get('/datajenispupukedit/{ID_Pupuk}', [datajenispupuk::class, 'edit'])->name('datajenispupukedit');
    Route::post('/datajenispupukupdate/{ID_Pupuk}', [datajenispupuk::class, 'update'])->name('datajenispupukupdate');

    Route::get('/datapupukmasukedit/{Kode_Pupuk_Masuk}', [datapupukmasuk::class, 'edit'])->name('datapupukmasukedit');
    Route::post('/datapupukmasukupdate/{Kode_Pupuk_Masuk}', [datapupukmasuk::class, 'update'])->name('datapupukmasukupdate');

    Route::get('/datapupukkeluaredit/{Kode_Pupuk_Keluar}', [datapupukkeluar::class, 'edit'])->name('datapupukkeluaredit');
    Route::post('/datapupukkeluarupdate/{Kode_Pupuk_Keluar}', [datapupukkeluar::class, 'update'])->name('datapupukkeluarupdate');

    Route::get('/datakaryawangudangedit/{ID_Karyawan_Gudang}', [datakaryawangudang::class, 'edit'])->name('datakaryawangudangedit');
    Route::post('/datakaryawangudangupdate/{ID_Karyawan_Gudang}', [datakaryawangudang::class, 'update'])->name('datakaryawangudangupdate');

    Route::get('/datagudangedit/{Kode_Gudang}', [datagudang::class, 'edit'])->name('datagudangedit');
    Route::post('/datagudangupdate/{Kode_Gudang}', [datagudang::class, 'update'])->name('datagudangupdate');

    Route::get('/datastockpupukedit/{Kode_Stock}', [datastockpupuk::class, 'edit'])->name('datastockpupukedit');
    Route::post('/datastockpupukupdate/{Kode_Stock}', [datastockpupuk::class, 'update'])->name('datastockpupukupdate');

    Route::get('/databarangpupukedit/{Kode_Jenis_Pupuk}', [datapupuk::class, 'edit'])->name('databarangpupukedit');
    Route::post('/databarangpupukupdate/{Kode_Jenis_Pupuk}', [datapupuk::class, 'update'])->name('databarangpupukupdate');

    Route::get('/datasupiredit/{ID_Supir}', [datasupir::class, 'edit'])->name('datasupiredit');
    Route::post('/datasupirupdate/{ID_Supir}', [datasupir::class, 'update'])->name('datasupirupdate');

    Route::get('/datatrukedit/{Kode_Truk}', [datatruk::class, 'edit'])->name('datatrukedit');
    Route::post('/datatrukupdate/{Kode_Truk}', [datatruk::class, 'update'])->name('datatrukupdate');

    Route::get('/datapengirimanedit/{Kode_Pengiriman}', [datapengiriman::class, 'edit'])->name('datapengirimanedit');
    Route::post('/datapengirimanupdate/{Kode_Pengiriman}', [datapengiriman::class, 'update'])->name('datapengirimanupdate');

    Route::get('/datajadwalpengirimanedit/{Kode_Jadwal}', [datajadwal::class, 'edit'])->name('datajadwalpengirimanedit');
    Route::post('/datajadwalpengirimanupdate/{Kode_Jadwal}', [datajadwal::class, 'update'])->name('datajadwalpengirimanupdate');

    Route::get('/dataoutlettokoedit/{No_Antrian}', [dataoutlet::class, 'edit'])->name('dataoutlettokoedit');
    Route::post('/dataoutlettokoupdate/{No_Antrian}', [dataoutlet::class, 'update'])->name('dataoutlettokoupdate');


    //hapus data
    Route::get('/datapegawaidelete/{ID_Pegawai}', [datapegawai::class, 'delete'])->name('datapegawaidelete');
    Route::get('/datajenispupukdelete/{ID_Pupuk}', [datajenispupuk::class, 'delete'])->name('datajenispupukdelete');
    Route::get('/datapupukmasukdelete/{Kode_Pupuk_Masuk}', [datapupukmasuk::class, 'delete'])->name('datapupukmasukdelete');
    Route::get('/datapupukkeluardelete/{Kode_Pupuk_Keluar}', [datapupukkeluar::class, 'delete'])->name('datapupukkeluardelete');

    Route::get('/datakaryawanggudangdelete/{ID_Karyawan_Gudang}', [datakaryawangudang::class, 'delete'])->name('datakaryawanggudangdelete');
    Route::get('/datagudangdelete/{Kode_Gudang}', [datagudang::class, 'delete'])->name('datagudangdelete');
    Route::get('/datastockdelete/{Kode_Stock}', [datastockpupuk::class, 'delete'])->name('datastockdelete');
    Route::get('/datapupukdelete/{Kode_Jenis_Pupuk}', [datapupuk::class, 'delete'])->name('datapupukdelete');

    Route::get('/datasupirdelete/{ID_Supir}', [datasupir::class, 'delete'])->name('datasupirdelete');
    Route::get('/datatrukdelete/{Kode_Truk}', [datatruk::class, 'delete'])->name('datatrukdelete');
    Route::get('/datapengirimandelete/{Kode_Pengiriman}', [datapengiriman::class, 'delete'])->name('datapengirimandelete');
    Route::get('/datajadwaldelete/{Kode_Jadwal}', [datajadwal::class, 'delete'])->name('datajadwaldelete');
    Route::get('/dataoutletdelete/{No_Antrian}', [dataoutlet::class, 'delete'])->name('dataoutletdelete');

    //print data
    Route::get('/datapegawaiPDF', [datapegawai::class, 'exportPDF'])->name('datapegawaipdf');
    Route::get('/datajenispupukPDF', [datajenispupuk::class, 'exportPDF'])->name('datajenispupukpdf');
    Route::get('/datapupukmasukPDF', [datapupukmasuk::class, 'exportPDF'])->name('datapupukmasukpdf');
    Route::get('/datapupukkeluarPDF', [datapupukkeluar::class, 'exportPDF'])->name('datapupukkeluarpdf');

    Route::get('/datakaryawangudangPDF', [datakaryawangudang::class, 'exportPDF'])->name('datakaryawangudangpdf');
    Route::get('/datagudangPDF', [datagudang::class, 'exportPDF'])->name('datagudangpdf');
    Route::get('/datastockpupukPDF', [datastockpupuk::class, 'exportPDF'])->name('datastockpupukpdf');
    Route::get('/datapupukPDF', [datapupuk::class, 'exportPDF'])->name('datapupukpdf');

    Route::get('/datasupirPDF', [datasupir::class, 'exportPDF'])->name('datasupirpdf');
    Route::get('/datatrukPDF', [datatruk::class, 'exportPDF'])->name('datatrukpdf');
    Route::get('/datapengirimanPDF', [datapengiriman::class, 'exportPDF'])->name('datapengirimanpdf');
    Route::get('/datajadwalpengirimanPDF', [datajadwal::class, 'exportPDF'])->name('datajadwalpdf');
    Route::get('/dataoutlettokoPDF', [dataoutlet::class, 'exportPDF'])->name('dataoutletpdf');
});

Route::middleware([MiddlewarePegawai::class])->group(function () {
    Route::get('/pegawai', [DashboardPegawai::class, 'index']);
});

Route::middleware([MidlewareKaryawanGudang::class])->group(function () {
    Route::get('/karyawan', [DashboardKaryawan::class, 'index']);
    Route::get('/data_gudang', [datagudang::class, 'datagudang'])->name('data_gudang');

});

Route::middleware([MidlewareSupir::class])->group(function () {
    Route::get('/supir', [DashboardSupir::class, 'index']);
});