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
            $table->string('mahs')->nullable();
            $table->string('plkhaisinh')->nullable();//TT,BR,CXD,MTH
            $table->string('pldangky')->nullable();//DKmới, Đk lại
            $table->string('dunghanquahan')->nullabe();//Đúng hạn, quá hạn
            $table->string('so')->nullable();
            $table->string('quyen')->nullable();
            $table->date('ngaydangky')->nullable();
            $table->string('nguoiky')->nullable();
            $table->string('chucvu')->nullable();
            $table->string('nguoithuchien')->nullable();

            //Thông tin người khai
            $table->string('hotennk')->nullable();
            $table->string('loaigiaytonk')->nullable();
            $table->string('sogiaytonk')->nullable();
            $table->string('noicapgtnk')->nullable();
            $table->date('ngaycapgtnk')->nullable();
            $table->string('quanhenk')->nullable();
            $table->string('diachink')->nullable();

            //Thông tin người được khai sinh
            $table->string('sochungsinh')->nullable();
            $table->string('sodinhdanhcanhan')->nullable();
            $table->string('hotenks')->nullable();
            $table->string('gioitinhks')->nullable();
            $table->string('ngaysinhks')->nullable();
            $table->string('ngaysinhksbangchu')->nullable();
            $table->string('dantocks')->nullable();
            $table->string('quoctichks')->nullable();
            $table->string('plnoisinh')->nullable();
            $table->string('noisinh')->nullable();
            $table->string('quequanks')->nullable();

            //Thông tin mẹ
            $table->string('deathme')->nullable();
            $table->string('hotenme')->nullable();
            $table->string('loaigiaytome')->nullable();
            $table->string('sogiaytome')->nullable();
            $table->string('ngaysinhme')->nullable();
            $table->string('dantocme')->nullable();
            $table->string('quoctichme')->nullable();
            $table->string('diachime')->nullable();

            //Thông tin cha
            $table->string('deathcha')->nullable();
            $table->string('hotencha')->nullable();
            $table->string('loaigiaytocha')->nullable();
            $table->string('sogiaytocha')->nullable();
            $table->string('ngaysinhcha')->nullable();
            $table->string('dantoccha')->nullable();
            $table->string('quoctichcha')->nullable();
            $table->string('diachicha')->nullable();

            //Thông tin khác
            $table->string('trangthai')->nullable();
            $table->string('sobansao')->nullable();
            $table->string('noikcbbd')->nullable();
            $table->string('sodtlh')->nullable();
            $table->string('emaillh')->nullable();
            $table->string('sosohokhau')->nullable();
            $table->string('hotenchuho')->nullable();
            $table->string('quanhechuho')->nullable();
            $table->string('tongiaoks')->nullable();
            $table->string('diachiht')->nullable();
            $table->string('thuongtru')->nullable();
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
