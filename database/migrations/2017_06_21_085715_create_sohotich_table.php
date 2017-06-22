<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSohotichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sohotich', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matinh')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('maxa')->nullable();
            $table->string('quyenhotich')->nullable();
            $table->string('plhotich')->nullable();
            $table->string('sobatdau')->nullable();
            $table->string('soketthuc')->nullable();
            $table->date('ngaybatdau')->nullable();
            $table->date('ngayketthuc')->nullable();
            $table->string('namso')->nullable();
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
        Schema::dropIfExists('sohotich');
    }
}
