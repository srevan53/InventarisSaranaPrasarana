<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKibdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kibds', function (Blueprint $table) {
            $table->id();
            $table->char("kode");
            $table->char("nama");
            $table->char("alamat");
            $table->char("luas");
            $table->char("bulan");
            $table->char("tahun");
            $table->bigInteger("nilai");
            $table->char("umur");
            $table->char("opd");
            $table->char("sub_opd");
            $table->char("kota");
            $table->char("keterangan");
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
        Schema::dropIfExists('kibds');
    }
}
