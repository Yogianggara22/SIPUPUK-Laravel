<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_jenis_pupuk extends Model
{
    use HasFactory;
    protected $table = 'tb_jenis_pupuk';
    protected $guarded = [];
    protected $primaryKey = 'ID_Pupuk';
    protected $keyType = 'string';
}