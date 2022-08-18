<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapot extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama','nis','sakit','izin','alpha','total','ns1','ns2','ns3',
    ];
}
