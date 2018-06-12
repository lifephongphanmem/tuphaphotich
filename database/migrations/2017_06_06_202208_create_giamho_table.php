<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiamhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giamho', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mahs')->nullable();
            $table->string('soso')->nullable();
            $table->string('soquyen')->nullable();
            $table->string('socd')->nullable();
            $table->string('quyencd')->nullable();
            $table->string('soqd')->nullable();
            $table->string('coquanqd')->nullable();
            $table->string('phanloai')->nullable();
            $table->string('cancu')->nullable();
            $table->text('lydo')->nullable();
            $table->text('lydochamdut')->nullable();
            $table->string('phanloainhap')->nullable();//(Công nhận giám hộ mới, Cấp bản sao)
            $table->string('nguoiky')->nullable();
            $table->string('chucvu')->nullable();
            $table->string('nguoithuchien')->nullable();

            $table->date('ngaydangky')->nullable();
            $table->date('ngaychamdut')->nullable();
            $table->string('hotennk')->nullable();
            $table->string('gioitinhnk')->nullable();
            $table->string('loaigiaytonk')->nullable();
            $table->string('sogiaytonk')->nullable();
            $table->string('noicapgtnk')->nullable();
            $table->date('ngaycapgtnk')->nullable();
            $table->string('quanhenk')->nullable();
            $table->string('diachink')->nullable();

            $table->string('mangh1')->nullable();
            $table->string('hotenngh1')->nullable();
            $table->string('gioitinhngh1')->nullable();
            $table->string('ngaysinhngh1')->nullable();
            $table->string('dantocngh1')->nullable();
            $table->string('quoctichngh1')->nullable();
            $table->string('tamtrutamvangngh1')->nullable();
            $table->string('loaigiaytongh1')->nullable();
            $table->string('sogiaytongh1')->nullable();
            $table->string('noicapgtngh1')->nullable();
            $table->date('ngaycapgtngh1')->nullable();

            $table->string('mangh2')->nullable();
            $table->string('hotenngh2')->nullable();
            $table->string('gioitinhngh2')->nullable();
            $table->string('ngaysinhngh2')->nullable();
            $table->string('dantocngh2')->nullable();
            $table->string('quoctichngh2')->nullable();
            $table->string('tamtrutamvangngh2')->nullable();
            $table->string('loaigiaytongh2')->nullable();
            $table->string('sogiaytongh2')->nullable();
            $table->string('noicapgtngh2')->nullable();
            $table->date('ngaycapgtngh2')->nullable();

            $table->string('mandgh')->nullable();
            $table->string('hotenndgh')->nullable();
            $table->string('gioitinhndgh')->nullable();
            $table->string('ngaysinhndgh')->nullable();
            $table->string('dantocndgh')->nullable();
            $table->string('quoctichndgh')->nullable();
            $table->string('tamtrutamvangndgh')->nullable();
            $table->string('noisinhndgh')->nullable();
            $table->string('loaigiaytondgh')->nullable();
            $table->string('sogiaytondgh')->nullable();
            $table->string('noicapgtndgh')->nullable();
            $table->date('ngaycapgtndgh')->nullable();

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
        Schema::dropIfExists('giamho');
    }
}
