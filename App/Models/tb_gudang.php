<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_gudang extends Model
{
    use HasFactory;
    protected $table = 'tb_gudang';
    protected $guarded = [];
    protected $primaryKey = 'Kode_Gudang';
    protected $keyType = 'string';
}