<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;
    public $primaryKey = 'no_kd';
    protected $fillable = [
        'no_kd','semester','desk','desk_ringkasan',
    ];
}
