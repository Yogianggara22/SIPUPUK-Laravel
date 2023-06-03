<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pegawai extends Model
{
    use HasFactory;
    protected $table = 'tb_pegawai';
    protected $guarded = [];
    protected $primaryKey = 'ID_Pegawai';
    protected $keyType = 'string';
}