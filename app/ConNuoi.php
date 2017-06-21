<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConNuoi extends Model
{
    protected $table = 'connuoi';
    protected $fillable = [
        'id',
        'matinh',
        'mahuyen',
        'maxa',
        'masohoso',
        'masoconnuoi',
        'macdconnuoi',
        'soso',
        'quyen',

        'hotenchanuoi',
        'macdchanuoi',
        'ngaysinhchanuoi',
        'dantocchanuoi',
        'quoctichchanuoi',
        'cmndchanuoi',
        'noicapgtcn',
        'ngaycapgtcn',
        'thuongtrucn',

        'hotenmenuoi',
        'macdmenuoi',
        'ngaysinhmenuoi',
        'dantocmenuoi',
        'quoctichmenuoi',
        'cmndmenuoi',
        'noicapgtmn',
        'ngaycapgtmn',
        'thuongtrumn',

        'hotenconnuoi',
        'gioitinhconnuoi',
        'ngaysinhconnuoi',
        'noisinhconnuoi',
        'dantocconnuoi',
        'quoctichconnuoi',
        'thuongtruconnuoi',

        'hotenchagiao',
        'macdchagiao',
        'ngaysinhchagiao',
        'dantocchagiao',
        'quoctichchagiao',
        'cmndchagiao',
        'noicapgtcg',
        'ngaycapgtcg',
        'thuongtrucg',

        'hotenmegiao',
        'macdmegiao',
        'ngaysinhmegiao',
        'dantocmegiao',
        'quoctichmegiao',
        'cmndmegiao',
        'noicapgtmg',
        'ngaycapgtmg',
        'thuongtrumg',

        'quanhenguoigiao',
        'tencsnuoiduong',
        'nguoidaidiencsnd',
        'chucvundd',
        'noidkconnuoi',
        'ngaythangdk',
        'nguoithuchien',
        'nguoikygiaycn',
        'chucvunguoidk',
        'ngaythangqd',
        'soqd',
        'ghichu',
        'lydo',
        'tinhtrangsk',
        'phanloaiconnuoi',
        'tuoiconnuoi',
        'trangthai',
    ];
}
