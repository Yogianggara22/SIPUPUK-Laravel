<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pengiriman extends Model
{
    use HasFactory;
    protected $table = 'tb_pengiriman';
    protected $guarded = [];
    protected $primaryKey = 'Kode_Pengiriman';
    protected $keyType = 'string';
}