<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapbansaotrichlucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capbansaotrichluc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('madv')->nullable();
            $table->string('level')->nullable();
            $table->date('ngaycap')->nullable();
            $table->string('sotrichluc')->nullable();
            $table->string('quyentrichluc')->nullable();
            $table->string('plbstrichluc')->nullable();
            $table->string('quyenhotich')->nullable();
            $table->string('sohotich')->nullable();
            $table->string('nguoiky')->nullable();
            $table->string('chucvu')->nullable();
            $table->string('soluongbs')->nullable();
            $table->text('ghichu')->nullable();
            $table->string('hotennyc')->nullable();
            $table->string('plgiaytonyc')->nullable();
            $table->string('sogiaytonyc')->nullable();
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
        Schema::dropIfExists('capbansaotrichluc');
    }
}
