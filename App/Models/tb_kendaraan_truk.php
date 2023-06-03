<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kendaraan_truk extends Model
{
    use HasFactory;
    protected $table = 'tb_kendaraan_truk';
    protected $guarded = [];
    protected $primaryKey = 'Kode_Truk';
    protected $keyType = 'string';
}