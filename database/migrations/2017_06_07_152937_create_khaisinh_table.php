<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhaisinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khaisinh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matinh')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('maxa')->nullable();
            $table->string('sokhaisinh')->nullable();
            $table->string('quyenkhaisinh')->nullable();
            $table->string('makhaisinh')->unique();
            $table->string('macongdan')->nullable();
            $table->string('hoten')->nullable();
            $table->string('gioitinh')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('plnoisinh')->nullable();
            $table->string('noisinh')->nullable();
            $table->string('dantoc')->nullable();
            $table->string('quoctich')->nullable();
            $table->string('tongiao')->nullable();
            $table->string('quequan')->nullable();
            $table->string('thuongtru')->nullable();
            $table->string('plnguoiks')->nullable();//(Con trong giá thú,con ngoài giá thú, bị bỏ rơi)
            $table->string('macongdancha')->nullable();
            $table->string('macongdanme')->nullable();
            $table->string('hotennguoikhai')->nullable();
            $table->string('quanhenguoikhai')->nullable();
            $table->string('noidangky')->nullable();
            $table->date('ngaydangky')->nullable();
            $table->string('plkhaisinh')->nullable();//Đăng ký đúng hạn,quá hạn
            $table->string('plnhap')->nullable();
            $table->string('ghichu')->nullable();
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
        Schema::dropIfExists('khaisinh');
    }
}
