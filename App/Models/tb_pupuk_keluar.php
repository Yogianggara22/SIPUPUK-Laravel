<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pupuk_keluar extends Model
{
    use HasFactory;
    protected $table = 'tb_pupuk_keluar';
    protected $guarded = [];
    protected $primaryKey = 'Kode_Pupuk_Keluar';
    protected $keyType = 'string';
}