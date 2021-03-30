<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->char('kode_matkul', 8);
            $table->string('nama_matkul', 50);
            $table->integer('sks');
            $table->char('kode_prodi', 5);
            $table->timestamps();

            $table->index('kode_matkul');
            
            $table->foreign('kode_prodi')
            ->references('kode_prodi')
            ->on('prodis')
            ->onupdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matakuliahs');
    }
}
