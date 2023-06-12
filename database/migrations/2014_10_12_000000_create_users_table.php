<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('npm')->unique();
            $table->string('name');
            $table->enum('prodi', ['Teknik', 'Sistem Informasi', 'Informatika', 'Teknik Elektro', 'Teknik Sipil', 'Teknik Mesin', 'Arsitektur']);
            $table->enum('jenis_kelamin', ['Perempuan', 'Laki-laki']);
            $table->bigInteger('phone');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
