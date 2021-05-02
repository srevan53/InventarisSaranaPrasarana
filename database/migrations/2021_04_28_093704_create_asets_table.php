<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asets', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->char("kode");
            $table->char("register");
            $table->enum('kib', ['KIB B', 'KIB E']);
            $table->string("lokasi");
            $table->string("merk");
            $table->char("tahun");
            $table->integer("jumlah");
            $table->bigInteger("harga");
            $table->bigInteger("nilai");
            $table->integer("akumulasi");
            $table->string("keterangan");
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
        Schema::dropIfExists('asets');
    }
}
