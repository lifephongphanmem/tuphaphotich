<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CongDan extends Model
{
    protected $table = 'congdan';
    protected $fillable = [
        'id',
        'matinh',
        'mahuyen',
        'maxa',
        'macongdan',
        'hoten',
        'gioitinh',
        'ngaysinh',
        'quequan',
        'thuongtru',
        'socmnd',
        'trangthai',
        'action'
    ];
}
