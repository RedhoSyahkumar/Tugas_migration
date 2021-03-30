<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->char('nidn', 10);
            $table->string('nama', 50);
            $table->char('kode_prodi', 5);
            $table->timestamps();

            $table->index('nidn');

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
        Schema::dropIfExists('dosens');
    }
}
