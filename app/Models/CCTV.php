<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CCTV extends Model
{
    use HasFactory;
    protected $table = 'cctvs';
    protected $fillable = [
        'no',
        'nama',
        'lat',
        'lon',
        'tanggal',
        'jenis',
    ];

    protected $cast = [
        'tanggal' => 'date'
    ];
}
