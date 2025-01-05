<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagination', function (Blueprint $table) {
            $table->increments('pegawai_id');
            $table->string('pegawai_nama'); 
            $table->string('pegawai_jabatan');
            $table->integer('pegawai_umur');
            $table->text('pegawai_alamat');
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
        Schema::dropIfExists('pagination');
    }
};
