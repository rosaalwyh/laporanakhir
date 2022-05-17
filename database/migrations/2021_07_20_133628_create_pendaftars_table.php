<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('bagian_id')->unsigned()->nullable();
            $table->string('nama_lengkap', 100)->nullable();
            $table->string('nim', 20)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin', 10)->nullable();
            $table->string('asal_kampus', 50)->nullable();
            $table->string('jurusan', 50)->nullable();
            $table->string('proposal', 100)->nullable();
            $table->string('ktm', 100)->nullable();
            $table->string('surat_pengantar', 100)->nullable();
            $table->enum('status', ['terekomendasi', 'terima', 'belum', 'tidak'])->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bagian_id')->references('id')->on('bagians')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftars');
    }
}
