<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;

    protected $table = 'data_laundry';

    protected $fillable = [
        'kode',
        'tanggal',
        'waktu',
        'berat',
        'total_harga',
        'progres',
    ];
}
