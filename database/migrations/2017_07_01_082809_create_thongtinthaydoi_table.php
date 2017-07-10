<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThongtinthaydoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongtinthaydoi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matinh')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('maxa')->nullable();
            $table->string('mahs')->nullable();
            $table->string('plgiayto')->nullable();
            $table->string('plthaydoi')->nullable();
            $table->string('hotennk')->nullable();
            $table->string('thuongtrunk')->nullable();
            $table->string('cmndnk')->nullable();
            $table->string('quanhengntd')->nullable();
            $table->string('hotenntd')->nullable();
            $table->string('ngaysinhntd')->nullable();
            $table->string('gioitinhntd')->nullable();
            $table->string('dantocntd')->nullable();
            $table->string('quoctichntd')->nullable();
            $table->string('cmndntd')->nullable();
            $table->string('thuongtruntd')->nullable();
            $table->string('noidkks')->nullable();
            $table->date('ngaydkks')->nullable();
            $table->string('noidungtd')->nullable();
            $table->string('thaydoitu')->nullable();
            $table->string('thaydoithanh')->nullable();
            $table->string('lydo')->nullable();
            $table->string('cancu')->nullable();
            $table->date('ngaydk')->nullable();
            $table->string('nguoikygiay')->nullable();
            $table->string('chucvunguoikygiay')->nullable();
            $table->string('nguoithuchien')->nullable();
            $table->string('noithaydoi')->nullable();
            $table->string('quyentd')->nullable();
            $table->string('sotd')->nullable();
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
        Schema::dropIfExists('thongtinthaydoi');
    }
}
