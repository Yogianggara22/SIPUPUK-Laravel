<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_pupuk_masuk extends Model
{
    use HasFactory;
    protected $table = 'tb_pupuk_masuk';
    protected $guarded = [];
    protected $primaryKey = 'Kode_Pupuk_Masuk';
    protected $keyType = 'string';
}