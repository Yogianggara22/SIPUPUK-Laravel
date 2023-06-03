<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_karyawan_gudang extends Model
{
    use HasFactory;
    protected $table = 'tb_karyawan_gudang';
    protected $guarded = [];
    protected $primaryKey = 'ID_Karyawan_Gudang';
    protected $keyType = 'string';
}