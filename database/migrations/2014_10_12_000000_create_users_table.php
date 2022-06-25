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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('level')->default('anonymus');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('foto')->nullable();
            $table->integer('id_siswa')->nullable();
            $table->integer('nip')->nullable();
            $table->integer('id_kelas')->nullable();
            $table->integer('id_jurusan')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('alamat')->nullable();
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
