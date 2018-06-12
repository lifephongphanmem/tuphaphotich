<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhaiTuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khaitu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matinh')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('maxa')->nullable();
            $table->string('masohoso')->nullable();
            $table->string('macongdan')->nullable();
            $table->string('so')->nullable();
            $table->string('quyen')->nullable();
            $table->string('hoten')->nullable();
            $table->string('gioitinh')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('noisinh')->nullable();
            $table->string('dantoc')->nullable();
            $table->string('quoctich')->nullable();
            $table->string('thuongtru')->nullable();
            $table->string('loaigiayto')->nullable();
            $table->string('sogiayto')->nullable();
            $table->string('giotu')->nullable();
            $table->string('phuttu')->nullable();
            $table->date('ngaychet')->nullable();
            $table->string('noichet')->nullable();
            $table->string('nguyennhan')->nullable();
            $table->string('giaybaotu')->nullable();
            $table->string('donvicapgbt')->nullable();
            $table->date('ngaycapgbt')->nullable();
            $table->string('noidangkykt')->nullable();
            $table->date('ngaydangkykt')->nullable();
            $table->string('ghichukt')->nullable();
            $table->string('nguoithuchien')->nullable();
            $table->string('nguoikygct')->nullable();
            $table->string('chucvu')->nullable();
            $table->string('hotennk')->nullable();
            $table->string('loaigiaytonk')->nullable();
            $table->string('sogiaytonk')->nullable();
            $table->string('noicapnk')->nullable();
            $table->string('ngaycapnk')->nullable();
            $table->string('noicutrunk')->nullable();
            $table->string('quanhe')->nullable();
            $table->string('phanloaikt')->nullable();
            $table->string('phanloaidk')->nullable();
            $table->string('phanloaituoi')->nullable();
            $table->string('tuoinguoitu')->nullable();
            $table->string('dunghanquahan')->nullable();
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
        Schema::dropIfExists('khaitu');
    }
}
