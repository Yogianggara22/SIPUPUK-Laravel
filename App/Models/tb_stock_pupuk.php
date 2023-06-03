<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_stock_pupuk extends Model
{
    use HasFactory;
    protected $table = 'tb_stock_pupuk';
    protected $guarded = [];
    protected $primaryKey = 'Kode_Stock';
    protected $keyType = 'string';
}