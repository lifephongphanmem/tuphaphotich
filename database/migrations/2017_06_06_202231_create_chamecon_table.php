<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChameconTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamecon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mahs')->nullable();

            $table->string('soso')->nullable();
            $table->string('soquyen')->nullable();
            $table->string('soqd')->nullable();
            $table->string('coquanqd')->nullable();
            $table->string('phanloai')->nullable();
            $table->string('cancu')->nullable();
            $table->text('lydo')->nullable();
            $table->string('phanloainhap')->nullable();
            $table->string('nguoiky')->nullable();
            $table->string('chucvu')->nullable();
            $table->string('nguoithuchien')->nullable();

            $table->date('ngaydangky')->nullable();
            $table->string('hotennk')->nullable();
            $table->date('ngaysinhnk')->nullable();
            $table->string('dantocnk')->nullable();
            $table->string('quoctichnk')->nullable();
            $table->string('noicutrunk')->nullable();
            $table->string('loaigiaytonk')->nullable();
            $table->string('sogiaytonk')->nullable();
            $table->string('noicapgtnk')->nullable();
            $table->date('ngaycapgtnk')->nullable();
            $table->string('quanhenk')->nullable();
            $table->string('diachink')->nullable();

            $table->string('mann')->nullable();
            $table->string('hotennn')->nullable();
            $table->string('gioitinhnn')->nullable();
            $table->string('ngaysinhnn')->nullable();
            $table->string('dantocnn')->nullable();
            $table->string('quoctichnn')->nullable();
            $table->string('tamtrutamvangnn')->nullable();
            $table->string('loaigiaytonn')->nullable();
            $table->string('sogiaytonn')->nullable();
            $table->string('noicapgtnn')->nullable();
            $table->date('ngaycapgtnn')->nullable();

            $table->string('mandn')->nullable();
            $table->string('hotenndn')->nullable();
            $table->string('gioitinhndn')->nullable();
            $table->string('ngaysinhndn')->nullable();
            $table->string('dantocndn')->nullable();
            $table->string('quoctichndn')->nullable();
            $table->string('tamtrutamvangndn')->nullable();
            $table->string('loaigiaytondn')->nullable();
            $table->string('sogiaytondn')->nullable();
            $table->string('noicapgtndn')->nullable();
            $table->date('ngaycapgtndn')->nullable();

            $table->string('trangthai')->nullable();
            $table->text('ghichu')->nullable();
            $table->string('matinh')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('maxa')->nullable();
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
        Schema::dropIfExists('chamecon');
    }
}
