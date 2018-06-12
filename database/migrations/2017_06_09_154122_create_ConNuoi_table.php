<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConNuoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ConNuoi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matinh')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('maxa')->nullable();
            $table->string('masohoso')->nullable();
            $table->string('masoconnuoi')->nullable();
            $table->string('macdconnuoi')->nullable();
            $table->string('so')->nullable();
            $table->string('quyen')->nullable();
            $table->string('hotenchanuoi')->nullable();
            $table->string('macdchanuoi')->nullable();
            $table->date('ngaysinhchanuoi')->nullable();
            $table->date('noisinhcn')->nullable();
            $table->string('dantocchanuoi')->nullable();
            $table->string('quoctichchanuoi')->nullable();
            $table->string('cmndchanuoi')->nullable();
            $table->string('noicapgtcn')->nullable();
            $table->date('ngaycapgtcn')->nullable();
            $table->string('thuongtrucn')->nullable();
            $table->string('nghenghiepcn')->nullable();
            $table->string('dtcn')->nullable();
            $table->string('hotenmenuoi')->nullable();
            $table->string('macdmenuoi')->nullable();
            $table->date('ngaysinhmenuoi')->nullable();
            $table->date('noisinhmn')->nullable();
            $table->string('dantocmenuoi')->nullable();
            $table->string('quoctichmenuoi')->nullable();
            $table->string('cmndmenuoi')->nullable();
            $table->string('noicapgtmn')->nullable();
            $table->date('ngaycapgtmn')->nullable();
            $table->string('thuongtrumn')->nullable();
            $table->string('nghenghiepmn')->nullable();
            $table->string('dtmn')->nullable();
            $table->string('hotenconnuoi')->nullable();
            $table->string('gioitinhconnuoi')->nullable();
            $table->date('ngaysinhconnuoi')->nullable();
            $table->string('noisinhconnuoi')->nullable();
            $table->string('dantocconnuoi')->nullable();
            $table->string('quoctichconnuoi')->nullable();
            $table->string('thuongtruconnuoi')->nullable();
            $table->string('hotenchagiao')->nullable();
            $table->string('macdchagiao')->nullable();
            $table->date('ngaysinhchagiao')->nullable();
            $table->string('dantocchagiao')->nullable();
            $table->string('quoctichchagiao')->nullable();
            $table->string('cmndchagiao')->nullable();
            $table->string('noicapgtcg')->nullable();
            $table->date('ngaycapgtcg')->nullable();
            $table->string('thuongtrucg')->nullable();
            $table->string('hotenmegiao')->nullable();
            $table->string('macdmegiao')->nullable();
            $table->date('ngaysinhmegiao')->nullable();
            $table->string('dantocmegiao')->nullable();
            $table->string('quoctichmegiao')->nullable();
            $table->string('cmndmegiao')->nullable();
            $table->string('noicapgtmg')->nullable();
            $table->date('ngaycapgtmg')->nullable();
            $table->string('thuongtrumg')->nullable();
            $table->string('quanhenguoigiao')->nullable();
            $table->string('tencsnuoiduong')->nullable();
            $table->string('nguoidaidiencsnd')->nullable();
            $table->string('chucvundd')->nullable();
            $table->string('noidkconnuoi')->nullable();
            $table->date('ngaythangdk')->nullable();
            $table->string('nguoithuchien')->nullable();
            $table->string('nguoikygiaycn')->nullable();
            $table->string('chucvunguoidk')->nullable();
            $table->date('ngaythangqd')->nullable();
            $table->string('soqd')->nullable();
            $table->string('ghichu')->nullable();
            $table->string('lydo')->nullable();
            $table->string('tinhtrangsk')->nullable();
            $table->string('phanloaiconnuoi')->nullable();
            $table->string('tuoiconnuoi')->nullable();
            $table->string('trangthai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ConNuoi');
    }
}
