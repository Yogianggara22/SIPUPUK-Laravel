<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_outlet_toko extends Model
{
    use HasFactory;
    protected $table = 'tb_outlet_toko';
    protected $guarded = [];
    protected $primaryKey = 'No_Antrian';
    protected $keyType = 'string';
}