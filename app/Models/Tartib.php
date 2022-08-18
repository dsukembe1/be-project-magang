<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tartib extends Model
{
    use HasFactory;
    protected $fillable = [
        'nis','nama','kelas','tanggal','jenis','keterangan',
    ];
}
