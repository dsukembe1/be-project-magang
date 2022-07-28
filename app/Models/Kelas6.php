<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kelas6 extends Model
{
    use HasFactory;
    public $primaryKey = 'nis';
    protected $fillable = [
        'nis','nama','nama_mapel','nh1','nh2','uts','uas','na',
    ];

    static function getKelas6(){
        $return=DB::table('kelas6s')
        ->join('mapels','kelas6s.nama_mapel','=','mapels.nama_mapel');
        return $return;
    }
}
