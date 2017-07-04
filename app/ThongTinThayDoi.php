<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongTinThayDoi extends Model
{
    protected $table="thongtinthaydoi";
    protected $fillable=[
            'id',
            'matinh',
            'mahuyen',
            'maxa',
            'mahs',
            'plgiayto',
            'plthaydoi',
            'hotennk',
            'thuongtrunk',
            'cmndnk',
            'quanhengntd',
            'hotenntd',
            'gioitinhntd',
            'dantocntd',
            'quoctichntd',
            'cmndntd',
            'thuongtruntd',
            'noidkks',
            'ngaydkks',
            'noidungtd',
            'thaydoitu',
            'thaydoithanh',
            'lydo',
            'cancu',
            'ngaydk',
            'nguoikygiay',
            'noithaydoi',
            'quyentd',
            'sotd',
    ];
}
