<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giamho extends Model
{
    protected $table = 'giamho';
    protected $fillable = [
        'id',
        'mahs',
        'soso',
        'soquyen',
        'soqd',
        'coquanqd',
        'phanloai',//giam ho/chấm dứt giám hộ
        'cancu',
        'lydo',
        'phanloainhap',//(Công nhận giám hộ mới, Cấp bản sao)
        'nguoiky',
        'chucvu',
        'nguoithuchien',

        'ngaydangky',
        'hotennk',
        'loaigiaytonk',
        'sogiaytonk',
        'noicapgtnk',
        'ngaycapgtnk',
        'quanhenk',
        'diachink',

        'mangh1',
        'hotenngh1',
        'gioitinhngh1',
        'ngaysinhngh1',
        'dantocngh1',
        'quoctichngh1',
        'tamtrutamvangngh1',
        'loaigiaytongh1',
        'sogiaytongh1',
        'noicapgtngh1',
        'ngaycapgtngh1',

        'mangh2',
        'hotenngh2',
        'gioitinhngh2',
        'ngaysinhngh2',
        'dantocngh2',
        'quoctichngh2',
        'tamtrutamvangngh2',
        'loaigiaytongh2',
        'sogiaytongh2',
        'noicapgtngh2',
        'ngaycapgtngh2',

        'mandgh',
        'hotenndgh',
        'gioitinhndgh',
        'ngaysinhndgh',
        'dantocndgh',
        'quoctichndgh',
        'tamtrutamvangndgh',
        'loaigiaytondgh',
        'sogiaytondgh',
        'noicapgtndgh',
        'ngaycapgtndgh',
        'noisinhndgh',

        'trangthai',
        'ghichu',

        'matinh',
        'mahuyen',
        'maxa',
    ];
}
