<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TTHonNhan extends Model
{
    protected $table = 'tthonnhan';
    protected $fillable = [
        'id',
        'matinh',
        'mahuyen',
        'maxa',
        'mahs',
        'soxacnhan',
        'ngayxn',
        'donvixn',
        'nguoidn',
        'quanhe',
        'hotenxn',
        'ngaysinh',
        'gioitinh',
        'dantoc',
        'quoctich',
        'giayto',
        'noicutru',
        'tungay',
        'denngay',
        'tthonnhan',
        'noidungxn',
        'trangthai',
        'hotennk',
        'chucvunk',
        'phanloai'
    ];
}
