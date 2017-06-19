<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KetHon extends Model
{
    protected $table = 'kethon';
    protected $fillable = [
        'id',
        'matinh',
        'mahuyen',
        'maxa',
        'mahs',
        'pldangky',
        'sokethon',
        'quyenkethon',
        'ngaydangky',
        'nguoiky',
        'chucvu',
        'nguoithuchien',
        'ghichu',

        'hotenvo',
        'loaigiaytovo',
        'sogiaytovo',
        'ngaysinhvo',
        'dantocvo',
        'quoctichvo',
        'diachivo',

        'hotenchong',
        'loaigiaytochong',
        'sogiaytochong',
        'ngaysinhchong',
        'dantocchong',
        'quoctichchong',
        'diachichong',
        'trangthai'
    ];
}
