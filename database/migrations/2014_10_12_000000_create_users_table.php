<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->Increments('id')->autoIncrement();
            $table->boolean('status_id')->default(0);
            $table->string('nama');
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->enum('jenis_kelamin', ['Laki-laki','Perempuan']);
            $table->string('nik');
            $table->text('alamat');
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
