<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_supir_pengirim extends Model
{
    use HasFactory;
    protected $table = 'tb_supir_pengirim';
    protected $guarded = [];
    protected $primaryKey = 'ID_Supir';
    protected $keyType = 'string';
}