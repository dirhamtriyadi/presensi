<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    var $table = 'presensi_harian';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('tgl_masuk');
            $table->dateTime('tgl_pulang');
            $table->char('ket_hari', 1);
            $table->char('nip', 9);
            $table->string('ip_masuk', 15);
            $table->string('ip_keluar', 15);
            $table->unsignedInteger('peta_kehadiran_id');
            $table->time('jam_harus_masuk');
            $table->time('jam_harus_pulang');
            $table->foreign('peta_kehadiran_id')->references('id')
                ->on('peta_kehadiran');
            $table->foreign('nip')->references('nip')->on('pengguna');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::drop($this->table);
    }
};
