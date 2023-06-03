<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pupuk extends Model
{
    use HasFactory;
    protected $table = 'tb_pupuk';
    protected $guarded = [];
    protected $primaryKey = 'Kode_Jenis_Pupuk';
    protected $keyType = 'string';
}