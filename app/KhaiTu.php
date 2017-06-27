<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhaiTu extends Model
{
    protected $table = "khaitu";
    protected $fillable = [
        'id',
        'matinh',
        'mahuyen',
        'maxa',
        'so',
        'quyen',

        'hoten',
        'gioitinh',
        'ngaysinh',
        'noisinh',
        'dantoc',
        'quoctich',
        'thuongtru',
        'cmnd',
        'giotu',
        'phuttu',
        'ngaychet',
        'noichet',
        'nguyennhan',
        'giaybaotu',
        'donvicapgbt',
        'ngaycapgbt',
        'noidangkykt',
        'ngaydangkykt',
        'ghichukt',
        'nguoithuchien',
        'nguoikygct',
        'chucvu',
        'hotennk',
        'giaytonk',
        'quanhe',
        'phanloaikt',
        'phanloaidk',
        'tuoinguoitu',
        'dunghanquahan',
        'trangthai',
    ];
}
