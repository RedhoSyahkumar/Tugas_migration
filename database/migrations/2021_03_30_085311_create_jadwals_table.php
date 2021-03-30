<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->char('kode_matkul', 8);
            $table->char('nidn', 10);
            $table->char('kelas', 2);
            $table->string('hari', 15);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();

            $table->foreign('nidn')
            ->references('nidn')
            ->on('dosens')
            ->onupdate('cascade');

            $table->foreign('kode_matkul')
            ->references('kode_matkul')
            ->on('matakuliahs')
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
        Schema::dropIfExists('jadwals');
    }
}
