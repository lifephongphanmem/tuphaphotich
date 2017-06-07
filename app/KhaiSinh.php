<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhaiSinh extends Model
{
    protected $table = 'khaisinh';
    protected $fillable = [
        'id',
        'matinh',
        'mahuyen',
        'maxa',
        'sokhaisinh',
        'quyenkhaisinh',
        'makhaisinh',
        'macongdan',
        'hoten',
        'gioitinh',
        'ngaysinh',
        'plnoisinh',
        'noisinh',
        'dantoc',
        'quoctich',
        'tongiao',
        'quequan',
        'thuongtru',
        'plnguoiks',
        'macongdancha',
        'macongdanme',
        'hotennguoikhai',
        'quanhenguoikhai',
        'noidangky',
        'ngaydangky',
        'plkhaisinh',
        'plnhap',
        'ghichu'
    ];
}
