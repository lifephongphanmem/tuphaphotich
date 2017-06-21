<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CapBanSaoTrichLuc extends Model
{
    //capbansaotrichluc
    protected $table = 'capbansaotrichluc';
    protected $fillable = [
        'id',
        'matinh',
        'mahuyen',
        'maxa',
        'level',
        'ngaycap',
        'sotrichluc',
        'quyentrichluc',
        'plbstrichluc',
        'mahs',
        'nguoiky',
        'chucvu',
        'soluongbs',
        'ghichu',
        'hotennyc',
        'plgiaytonyc',
        'sogiaytonyc',
    ];
}
