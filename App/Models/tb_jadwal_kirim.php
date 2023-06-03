<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_jadwal_kirim extends Model
{
    use HasFactory;
    protected $table = 'tb_jadwal_kirim';
    protected $guarded = [];
    protected $primaryKey = 'Kode_Jadwal';
    protected $keyType = 'string';
}