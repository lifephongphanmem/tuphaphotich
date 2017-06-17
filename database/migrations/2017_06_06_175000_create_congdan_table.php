<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCongdanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congdan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matinh')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('maxa')->nullable();
            $table->string('macongdan')->unique();
            $table->string('hoten')->nullable();
            $table->string('hotenk')->nullable();
            $table->string('gioitinh')->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('noisinh')->nullable();
            $table->string('dantoc')->nullable();
            $table->string('quoctich')->nullable();
            $table->string('tongiao')->nullable();
            $table->string('quequan')->nullable();
            $table->string('thuongtru')->nullable();
            $table->string('socmnd')->nullable();
            $table->string('ttcmnd')->nullable();
            $table->string('tthonnhan')->nullable();
            $table->string('trangthai')->nullable();
            $table->text('tttd')->nullable();
            $table->string('action')->nullable();
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
        Schema::dropIfExists('congdan');
    }
}
