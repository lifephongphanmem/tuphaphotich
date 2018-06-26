<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toado', function (Blueprint $table) {
            $table->increments('id');
            $table->string('level')->nullable();
            $table->string('mahuyen')->nullable();
            $table->string('maxa')->nullable();
            $table->string('phanloai')->nullable();

            $table->string('toado')->nullable();
            $table->string('toado1')->nullable();
            $table->string('toado2')->nullable();
            $table->string('toado3')->nullable();
            $table->string('toado4')->nullable();
            $table->string('toado5')->nullable();
            $table->string('toado6')->nullable();
            $table->string('toado7')->nullable();
            $table->string('toado8')->nullable();
            $table->string('toado9')->nullable();
            $table->string('toado10')->nullable();
            $table->string('toado11')->nullable();
            $table->string('toado12')->nullable();
            $table->string('toado13')->nullable();
            $table->string('toado14')->nullable();
            $table->string('toado15')->nullable();
            $table->string('toado16')->nullable();
            $table->string('toado17')->nullable();
            $table->string('toado18')->nullable();
            $table->string('toado19')->nullable();
            $table->string('toado20')->nullable();
            $table->string('toado21')->nullable();
            $table->string('toado22')->nullable();
            $table->string('toado23')->nullable();
            $table->string('toado24')->nullable();
            $table->string('toado25')->nullable();
            $table->string('toado26')->nullable();
            $table->string('toado27')->nullable();
            $table->string('toado28')->nullable();
            $table->string('toado29')->nullable();
            $table->string('toado30')->nullable();
            $table->string('toado31')->nullable();
            $table->string('toado32')->nullable();
            $table->string('toado33')->nullable();
            $table->string('toado34')->nullable();
            $table->string('toado35')->nullable();
            $table->string('toado36')->nullable();
            $table->string('toado37')->nullable();
            $table->string('toado38')->nullable();
            $table->string('toado39')->nullable();
            $table->string('toado40')->nullable();
            $table->string('toado41')->nullable();
            $table->string('toado42')->nullable();
            $table->string('toado43')->nullable();
            $table->string('toado44')->nullable();
            $table->string('toado45')->nullable();
            $table->string('toado46')->nullable();
            $table->string('toado47')->nullable();
            $table->string('toado48')->nullable();
            $table->string('toado49')->nullable();
            $table->string('toado50')->nullable();
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
        Schema::dropIfExists('toado');
    }
}
