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
            $table->string('soso')->nullable();
            $table->string('quyen')->nullable();
            $table->string('hotenchanuoi')->nullable();
            $table->string('macdchanuoi')->nullable();
            $table->string('ngaysinhchanuoi')->nullable();
            $table->string('dantocchanuoi')->nullable();
            $table->string('quoctichchanuoi')->nullable();
            $table->string('cmndchanuoi')->nullable();
            $table->string('noicapgtcn')->nullable();
            $table->string('ngaycapgtcn')->nullable();
            $table->string('thuongtrucn')->nullable();
            $table->string('hotenmenuoi')->nullable();
            $table->string('macdmenuoi')->nullable();
            $table->string('ngaysinhmenuoi')->nullable();
            $table->string('dantocmenuoi')->nullable();
            $table->string('quoctichmenuoi')->nullable();
            $table->string('cmndmenuoi')->nullable();
            $table->string('noicapgtmn')->nullable();
            $table->string('ngaycapgtmn')->nullable();
            $table->string('thuongtrumn')->nullable();
            $table->string('hotenconnuoi')->nullable();
            $table->string('gioitinhconnuoi')->nullable();
            $table->string('ngaysinhconnuoi')->nullable();
            $table->string('noisinhconnuoi')->nullable();
            $table->string('dantocconnuoi')->nullable();
            $table->string('quoctichconnuoi')->nullable();
            $table->string('thuongtruconnuoi')->nullable();
            $table->string('hotenchagiao')->nullable();
            $table->string('macdchagiao')->nullable();
            $table->string('ngaysinhchagiao')->nullable();
            $table->string('dantocchagiao')->nullable();
            $table->string('quoctichchagiao')->nullable();
            $table->string('cmndchagiao')->nullable();
            $table->string('noicapgtcg')->nullable();
            $table->string('ngaycapgtcg')->nullable();
            $table->string('thuongtrucg')->nullable();
            $table->string('hotenmegiao')->nullable();
            $table->string('macdmegiao')->nullable();
            $table->string('ngaysinhmegiao')->nullable();
            $table->string('dantocmegiao')->nullable();
            $table->string('quoctichmegiao')->nullable();
            $table->string('cmndmegiao')->nullable();
            $table->string('noicapgtmg')->nullable();
            $table->string('ngaycapgtmg')->nullable();
            $table->string('thuongtrumg')->nullable();
            $table->string('quanhenguoigiao')->nullable();
            $table->string('tencsnuoiduong')->nullable();
            $table->string('nguoidaidiencsnd')->nullable();
            $table->string('chucvundd')->nullable();
            $table->string('noidkconnuoi')->nullable();
            $table->string('ngaythangdk')->nullable();
            $table->string('nguoithuchien')->nullable();
            $table->string('nguoikygiaycn')->nullable();
            $table->string('chucvunguoidk')->nullable();
            $table->string('ngaythangqd')->nullable();
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
