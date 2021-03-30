<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frss', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 10);
            $table->char('semester', 5);
            $table->char('kode_matkul', 8);
            $table->string('thn_ajaran', 10);
            $table->timestamps();

            $table->foreign('kode_matkul')
            ->references('kode_matkul')
            ->on('matakuliahs')
            ->onUpdate('cascade');

            $table->foreign('npm')
            ->references('npm')
            ->on('mahasiswas')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frss');
    }
}
