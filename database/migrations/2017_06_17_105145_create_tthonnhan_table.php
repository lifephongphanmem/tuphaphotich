<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTthonnhanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tthonnhan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matinh')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('maxa')->nullable();
            $table->string('mahs')->nullable();
            $table->string('so')->nullable();
            $table->string('quyen')->nullable();
            $table->string('soxacnhan')->nullable();
            $table->date('ngayxn')->nullable();
            $table->string('donvixn')->nullable();
            $table->string('nguoidn')->nullable();
            $table->string('quanhe')->nullable();
            $table->string('hotenxn')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->date('noisinh')->nullable();
            $table->string('gioitinh')->nullable();
            $table->string('dantoc')->nullable();
            $table->string('quoctich')->nullable();
            $table->string('giayto')->nullable();
            $table->string('sogiayto')->nullable();
            $table->string('noicap')->nullable();
            $table->string('ngaycap')->nullable();
            $table->string('noicutru')->nullable();
            $table->string('nghenghiep')->nullable();
            $table->date('tungay')->nullable();
            $table->date('denngay')->nullable();
            $table->string('tthonnhan')->nullable();
            $table->string('noidungxn')->nullable();
            $table->string('trangthai')->nullable();
            $table->string('hotennky')->nullable();
            $table->string('dantocnk')->nullable();
            $table->string('quoctichnk')->nullable();
            $table->string('noicutrunk')->nullable();
            $table->string('chucvunky')->nullable();
            $table->string('phanloai')->nullable();
            $table->string('nguoithuchien')->nullable();
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
        Schema::dropIfExists('tthonnhan');
    }
}
