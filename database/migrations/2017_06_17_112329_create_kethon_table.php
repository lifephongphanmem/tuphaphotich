<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKethonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kethon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matinh')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('maxa')->nullable();
            $table->string('mahs')->nullable();
            $table->string('pldangky')->nullable();//DK lần đầu, Đk lại
            $table->string('sokethon')->nullable();
            $table->string('quyenkethon')->nullable();
            $table->date('ngaydangky')->nullable();
            $table->string('nguoiky')->nullable();
            $table->string('chucvu')->nullable();
            $table->string('nguoithuchien')->nullable();
            $table->text('ghichu')->nullable();

            $table->string('hotenvo')->nullable();
            $table->string('loaigiaytovo')->nullable();
            $table->string('sogiaytovo')->nullable();
            $table->string('ngaysinhvo')->nullable();
            $table->string('dantocvo')->nullable();
            $table->string('quoctichvo')->nullable();
            $table->string('diachivo')->nullable();
            $table->string('lankhvo')->nullable();

            $table->string('hotenchong')->nullable();
            $table->string('loaigiaytochong')->nullable();
            $table->string('sogiaytochong')->nullable();
            $table->string('ngaysinhchong')->nullable();
            $table->string('dantocchong')->nullable();
            $table->string('quoctichchong')->nullable();
            $table->string('diachichong')->nullable();
            $table->string('lankhchong')->nullable();
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
        Schema::dropIfExists('kethon');
    }
}
