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
            $table->string('soxacnhan')->nullable();
            $table->date('ngayxn')->nullable();
            $table->string('donvixn')->nullable();
            $table->string('nguoidn')->nullable();
            $table->string('quanhe')->nullable();
            $table->string('hotenxn')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('gioitinh')->nullable();
            $table->string('dantoc')->nullable();
            $table->string('quoctich')->nullable();
            $table->string('giayto')->nullable();
            $table->string('noicutru')->nullable();
            $table->date('tungay')->nullable();
            $table->date('denngay')->nullable();
            $table->string('tthonnhan')->nullable();
            $table->string('noidungxn')->nullable();
            $table->string('trangthai')->nullable();
            $table->string('hotennk')->nullable();
            $table->string('chucvunk')->nullable();
            $table->string('phanloai')->nullable();
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
