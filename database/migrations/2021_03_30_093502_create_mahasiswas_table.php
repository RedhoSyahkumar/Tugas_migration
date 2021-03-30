<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 10);
            $table->string('nama', 50);
            $table->char('kelas', 2);
            $table->char('nidn', 10);
            $table->year('tahun_masuk', 4);
            $table->timestamps();

            $table->index('npm');

            $table->foreign('nidn')
            ->references('nidn')
            ->on('dosens')
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
        Schema::dropIfExists('mahasiswas');
    }
}
